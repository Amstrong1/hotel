<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Requests\StoreReservationRequest;
use App\Http\Requests\UpdateReservationRequest;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reservations = Reservation::all();

        return view('app.reservations.index', [
            'reservations' => $reservations,
            'my_actions' => $this->reservation_actions(),
            'my_attributes' => $this->reservation_columns(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreReservationRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Reservation $reservation)
    {
        return view('app.reservations.edit', [
            'reservation' => $reservation,
            'my_fields' => $this->reservation_fields(),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Reservation $reservation)
    {
        return view('app.reservations.edit', [
            'reservation' => $reservation,
            'my_fields' => $this->reservation_fields(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateReservationRequest $request, Reservation $reservation)
    {
        $reservation->name = $request->name;
        $reservation->price = $request->price;
        $reservation->description = $request->description;
        $reservation->features = $request->features;

        if ($reservation->save()) {
            Alert::toast('Les informations ont été modifiées', 'success');
            return redirect('reservation');
        } else {
            Alert::toast('Une erreur est survenue', 'error');
            return redirect()->back()->withInput($request->input());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Reservation $reservation)
    {
        try {

            $reservation = $reservation->delete();
            Alert::success('Opération effectuée', 'Suppression éffectué');
            return redirect('reservation');
        } catch (\Exception $e) {
            Alert::error('Erreur', 'Elément introuvable');
            return redirect()->back();
        }
    }

    private function reservation_columns()
    {
        $columns = (object) [
            'product' => 'Produit',
            'start_date' => 'Debut',
            'end_date' => 'Fin',
            'start_time' => 'Heure debut',
            'end_time' => 'Heure fin',
            'status' => 'Statut',
        ];
        return $columns;
    }

    private function reservation_actions()
    {
        $actions = (object) array(
            'show' => "Voir",
            'edit' => "Modifier",
        );
        return $actions;
    }

    private function reservation_fields()
    {
        $fields = [
            'status' => [
                'title' => 'Statut',
                'field' => 'select',
                'options' => [
                    'En attente' => 'En attente',
                    'Rejeté' => 'Rejeté',
                    'Accordé' => 'Accordé'
                ],
            ],
        ];
        return $fields;
    }
}
