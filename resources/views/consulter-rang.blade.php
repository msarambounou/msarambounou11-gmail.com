@extends('layout')

@section('contenu')

    <h4 class="title is-6">CONSULTER VOTRE RANG</h4>


   
  
    <form style="background-color: #E9E9EA;">
        @foreach($demandes as $demandes)
          <h1>Votre êtes n°{{ $demandes ->id}} sur la site d'attente</h1>
        @endforeach
    </form>
   
@endsection