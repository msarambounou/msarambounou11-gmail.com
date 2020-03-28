<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConfidController extends Controller
{
    public function formulaire(){
        if (auth()->guest()) {

            flash("Vous devez être connecter pour voir la page MODIFIER-MDP")->error();
            return redirect('/connexion');
        }

        return view('Confidentialite');

        $client = \App\client::all();

        return view('liste-utilisateurs', [
            'clients' => $client,
        ]);
    }

    

}
