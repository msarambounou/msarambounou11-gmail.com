<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AdminModel;
use Illuminate\Support\Facades\Input;
use Illuminate\Database\Query\Builder;

class InscriptionController extends Controller
{
    public function formulaire()
    {
        return view('inscription');
    }

    public function traitement()
    {
                //Condition 
                request()->validate([
                    'nom'=> ['required'],
                    'prenom'=> ['required'],
                    'email'=> ['required', 'email'],
                    'password' => ['required', 'min:8', 'confirmed'],
                    'password_confirmation' => ['required'],
                ],  [
                        'password.min' => 'Pour des raison de sécurité, votre mot de passe doit faire :min caractères'
        
                ]);
        
        
        
                //BDD
                $client =  \App\client::create([
                    'nom' => request('nom'),
                    'prenom' => request('prenom'),
                    'email' => request('email'),
                    'mdp' => bcrypt(request('password')),
                ]);

               flash("Inscription réussit")->success();
        
            return redirect('/connexion');
    }
}
