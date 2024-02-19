<?php

namespace App\Http\Controllers;

use App\Models\Room;
use App\Http\Requests\StoreRoomRequest;
use App\Http\Requests\UpdateRoomRequest;
use RealRashid\SweetAlert\Facades\Alert;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rooms = Room::all();

        return view('app.rooms.index', [
            'rooms' => $rooms,
            'my_actions' => $this->room_actions(),
            'my_attributes' => $this->room_columns(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('app.rooms.create', [
            'my_fields' => $this->room_fields(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRoomRequest $request)
    {
        $room = new Room();

        // $fileName = time() . '.' . $request->image->extension();
        // $path = $request->file('image')->storeAs('images', $fileName, 'public');

        // $request->image->move(public_path('storage'), $fileName);

        $room->name = $request->name;
        $room->price = $request->price;
        $room->description = $request->description;
        $room->features = $request->features;
        // $room->image = $path;

        if ($room->save()) {
            Alert::toast("Données enregistrées", 'success');
            return redirect('room');
        } else {
            Alert::toast('Une erreur est survenue', 'error');
            return redirect()->back()->withInput($request->input());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Room $room)
    {
        return view('app.rooms.edit', [
            'room' => $room,
            'my_fields' => $this->room_fields(),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Room $room)
    {
        return view('app.rooms.edit', [
            'room' => $room,
            'my_fields' => $this->room_fields(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRoomRequest $request, Room $room)
    {
        
        // if ($request->file !== null) {
        //     $fileName = time() . '.' . $request->image->extension();
        //     $path = $request->file('image')->storeAs('images', $fileName, 'public');
        // }

        $room->name = $request->name;
        $room->price = $request->price;
        $room->description = $request->description;
        $room->features = $request->features;
        if (isset($path)) {
            // $room->image = $path;
        }

        if ($room->save()) {
            Alert::toast('Les informations ont été modifiées', 'success');
            return redirect('/room');
        } else {
            Alert::toast('Une erreur est survenue', 'error');
            return redirect()->back()->withInput($request->input());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Room $room)
    {
        try {

            $room = $room->delete();
            Alert::success('Opération effectuée', 'Suppression éffectué');
            return redirect('room');
        } catch (\Exception $e) {
            Alert::error('Erreur', 'Elément introuvable');
            return redirect()->back();
        }
    }

    private function room_columns()
    {
        $columns = (object) [
            // 'image' => '',
            'name' => 'Nom',
            'price' => 'Prix',
            'description' => 'Description',
            'features' => 'Caractéristiques',
        ];
        return $columns;
    }

    private function room_actions()
    {
        $actions = (object) array(
            'show' => "Voir",
            'edit' => "Modifier",
            'delete' => "Supprimer",
        );
        return $actions;
    }

    private function room_fields()
    {
        $fields = [
            'name' => [
                'title' => 'Nom',
                'field' => 'text'
            ],
            'price' => [
                'title' => 'Prix',
                'field' => 'number'
            ],
            'description' => [
                'title' => 'Description',
                'field' => 'textarea'
            ],
            'features' => [
                'title' => 'Caractéristiques',
                'field' => 'textarea'
            ],
            // <!-- 'image' => [
            //     'title' => 'Image',
            //     'field' => 'file'
            // ] -->
        ];
        return $fields;
    }
}
