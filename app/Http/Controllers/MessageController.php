<?php

namespace App\Http\Controllers;

use App\Models\Message;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Requests\StoreMessageRequest;
use App\Http\Requests\UpdateMessageRequest;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $messages = Message::all();

        return view('app.messages.index', [
            'messages' => $messages,
            'my_actions' => $this->message_actions(),
            'my_attributes' => $this->message_columns(),
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
    public function store(StoreMessageRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Message $message)
    {
        return view('app.messages.edit', [
            'message' => $message,
            'my_fields' => $this->message_fields(),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Message $message)
    {
        return view('app.messages.edit', [
            'message' => $message,
            'my_fields' => $this->message_fields(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMessageRequest $request, Message $message)
    {
        $message->name = $request->name;
        $message->price = $request->price;
        $message->description = $request->description;
        $message->features = $request->features;

        if ($message->save()) {
            Alert::toast('Les informations ont été modifiées', 'success');
            return redirect('admin/messages');
        } else {
            Alert::toast('Une erreur est survenue', 'error');
            return redirect()->back()->withInput($request->input());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Message $message)
    {
        try {

            $message = $message->delete();
            Alert::success('Opération effectuée', 'Suppression éffectué');
            return redirect('messages');
        } catch (\Exception $e) {
            Alert::error('Erreur', 'Elément introuvable');
            return redirect()->back();
        }
    }

    private function message_columns()
    {
        $columns = (object) [
            'name' => 'Nom',
            'email' => 'Email',
            'object' => 'Objet',
            'message' => 'Message',
        ];
        return $columns;
    }

    private function message_actions()
    {
        $actions = (object) array(
            'show' => "Voir",
            'edit' => "Modifier",
        );
        return $actions;
    }

    private function message_fields()
    {
        $fields = [
            'reply' => [
                'title' => 'Réponse',
                'field' => 'textarea',
            ],
        ];
        return $fields;
    }
}
