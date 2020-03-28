<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;


class ConnexionController extends Controller
{
    public function formulaire()
    {
        return view('connexion');
    }

    public function traitement()
    {
        request()->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        $resultat = auth()->attempt([
            //BDD               Formulaire
            'email' => request('email'),
            'password' => request('password'),

        ]);  


        if (Auth::check() && Auth::user()->role == "admin") {
            flash("Connexion resussit en tant que ADMIN")->success();
            return redirect('/compte-admin');
        }


        else if ($resultat) {
            flash("Connexion reussit en tant que USERS")->success();
            return redirect('/compte-users');

        }

        return back()->withInput()->withErrors([
            'email' => 'Vos identifiants sont incorrectes.',

        ]); 
    }
}


