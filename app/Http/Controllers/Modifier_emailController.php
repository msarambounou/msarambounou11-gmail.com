<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Modifier_emailController extends Controller
{
    public function formulaire(){
        if (auth()->guest()) {

            flash("Vous devez être connecter pour voir la page MODIFIER-EMAIL")->error();
            return redirect('/connexion');
        }

        return view('modifier-email');
    }


    public function update_email(){

        //Condition 
        request()->validate([
            'password' => ['required', 'min:8', 'confirmed'],
            'password_confirmation' => ['required'],
        ],  [
                'password.min' => 'Pour des raison de sécurité, votre mot de passe doit faire :min caractères'

        ]);


        //MODIF DANS BDD
        \App\Client::where('mdp', auth()->user()->mdp)
          ->update(['mdp' => bcrypt(request('password'))]);

          flash("Votre email à bien été modifié")->success();
        
        return redirect('/compte-admin');
    }
}
