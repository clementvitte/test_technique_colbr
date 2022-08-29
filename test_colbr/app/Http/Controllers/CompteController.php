<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompteController extends Controller
{
    public function accueil()
    {
        if (!(auth()->check())) {
            return redirect('/connexion')->withErrors([
                'email' => "vous devez etre connecté pour voir cette page",
            ]);
        }

        return view('mon-compte');
    }

    public function deconnexion()
    {
        auth()->logout();

        return redirect('/');
    }
}
