<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Liste_utilController extends Controller
{
    public function voir_util()
    {
        if (auth()->guest()) {

            flash("Vous devez être connecté pour voir la page LISTE DES ATTENTE")->error();
            return redirect('/connexion');
        }

        
        $client = \App\client::all();

        return view('liste-utilisateurs', [
            'clients' => $client,
        ]);
          
    }

}
