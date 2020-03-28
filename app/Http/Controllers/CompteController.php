<?php

namespace App\Http\Controllers;
use Auth;

use Illuminate\Http\Request;

class CompteController extends Controller
{
    public function accueil_admin()
    {
        if (auth()->guest()) {

            flash("Vous devez être connecter pour voir la page COMPTE-ADMIS")->error();
            return redirect('/connexion');
        }

        if (auth()->check() && auth()->user()->role == "") {
            return redirect('compte-users'); 
        }
        
        
        return view('compte-admin');    
    }

    public function accueil_users()
    {
        if (auth()->guest()) {

            flash("Vous devez être connecter pour voir la page COMPTE-USERS")->error();
            return redirect('/connexion');
        }

        if (Auth::check() && auth()->user()->role == "admin") {
            return redirect('compte-admin');
        }
            
        return view('compte-users');

           
    }

    
    public function deconnexion()
    {
        auth()->logout();

        flash("Vous êtes maintenant déconnecté")->success();

        return redirect('/');
    }

   

}
