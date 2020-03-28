<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReserverController extends Controller
{
    public function formulaire(){
        return view('reserver');
        
    }

    public function traitement(){
      
        //BDD
        //INSERT TO DEMANDES
        $demande =  \App\demandes::create([
            'id_clients' => auth()->user()->id,
        ]);

        //BDD
        //INSERT TO HISTORIQUE
        $historiques =  \App\historiques_reservation::create([
            'id_clients' => auth()->user()->id,
        ]);



        flash("Votre réservation a été pris en compte")->success();
        return redirect('/compte-users');
    }

    public function attribution(){
        
            $attribution = \App\places::create([
                
          
                

        ]);
    }
}
