@extends('layout')

@section('contenu')

    <h4 class="title is-6">RESERVATION</h4>


    <form class="section" action="/reserver" method="post" style="background-color: #E9E9EA;">
    {{ csrf_field() }}
        <div class="field">
            <h1>Voulez-vous vraiment reserver une place ?</h1>
        </div>
        <div class="control">
                <button class="button is-link">Envoyer</button>
            </div>
    </form>    

    
   
    


  
   
   
@endsection

