<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class InscriptionController extends Controller
{
    public function formulaire()
    {
        return view('inscription');
    }

    public function traitement()
    {
        request()->validate([
            'first_name' => ['required'],
            'last_name' => ['required'],
            'email' => ['required', 'email'],
            'password' => ['required', 'confirmed', 'min:8'],
            'password_confirmation' => ['required'],
        ], [
            'password.min' => 'For security reasons, your password must contain at least :min characters.'
        ]);

        $user = User::create([
            'first_name' => request('first_name'),
            'last_name' => request('last_name'),
            'email' => request('email'),
            'password' => bcrypt(request('password')),
            'password_confirmation' => request('password_confirmation'),
        ]);

        return 'Nous avons bien recu votre email qui est ' . request('email');
    }
}
