<?php

namespace App\Http\Controllers;

use App\Mail\MessageReceived;
use Illuminate\Support\Facades\Mail;

class MessagesController extends Controller
{
    //
    public function store()
    {

        request()->validate([
            'nombre' => 'required|string|max:100',
            'email' => 'required|email|max:100',
            'telefono' => 'required|string|max:100',
            'mensaje' => 'required|string|max:200',
        ]);

        Mail::to('daw211spam@gmail.com')->send(new MessageReceived);

        return 'Prueba de email de contacto, mensaje enviado.';

    }
}
