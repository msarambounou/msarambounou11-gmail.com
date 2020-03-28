<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Modifier_nom extends Controller
{
    public function formulaire(){
        if (auth()->guest()) {

            flash("Vous devez être connecter pour voir la page MODIFIER-MDP")->error();
            return redirect('/connexion');
        }

        return view('modifier-nom');
    }


    public function update_nom(){

        //Condition 
        request()->validate([
            'password' => ['required', 'min:8', 'confirmed'],
            'password_confirmation' => ['required'],
        ],  [
                'password.min' => 'Pour des raison de sécurité, votre mot de passe doit faire :min caractères'

        ]);


        //MODIF DANS BDD
        \App\Client::where('nom', auth()->user()->nom)
          ->update(['nom' => bcrypt(request('nom'))]);

          flash("Votre nom à bien été modifié")->success();
        
        return redirect('/compte-admin');
    }
}
