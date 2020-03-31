<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConsulterController extends Controller
{
    public function formulaire(){

        $id_demande = \App\demandes::where('id_clients', auth()->user()->id)->get();
        return view('consulter-rang', [
            'demandes' => $id_demande,
        ]);
    }

    public function formulaire_historique(){

        $historiques = \App\historiques_reservation::where('id_clients', auth()->user()->id)->get();
        return view('consulter-historiques-users', [
            'historiques' => $historiques,
        ]);
    }

    public function numero_place(){
        $num_places = \App\places::where('id_clients', auth()->user()->id)->get();
        return view('consulter-numero-place', [
            'places' => $num_places,
        ]);
    }

    
}
