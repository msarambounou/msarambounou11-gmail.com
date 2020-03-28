<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Modifier_prenomController extends Controller
{
    public function formulaire(){
        if (auth()->guest()) {

            flash("Vous devez être connecter pour voir la page MODIFIER-MDP")->error();
            return redirect('/connexion');
        }

        return view('modifier-prenom');
    }


    public function update_prenom(){

        //Condition 
        request()->validate([
            'password' => ['required', 'min:8', 'confirmed'],
            'password_confirmation' => ['required'],
        ],  [
                'password.min' => 'Pour des raison de sécurité, votre mot de passe doit faire :min caractères'

        ]);


        //MODIF DANS BDD
        \App\Client::where('prenom', auth()->user()->prenom)
          ->update(['prenom' => bcrypt(request('prenom'))]);

          flash("Votre prenom à bien été modifié")->success();
        
        return redirect('/compte-admin');
    }
}
