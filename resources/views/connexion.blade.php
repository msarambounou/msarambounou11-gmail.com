@extends('layout')

@section('contenu')


</br>
<div class="title m-b-md">
    <ins>Connectez-vous ici</ins>
</div>
<form class="section" action="/connexion" method="post" style="background-color: #E9E9EA;">
{{ csrf_field() }}


<div class="field">
    <label class="label">Email</label>
    <div class="control">
        <input class="input" type="email" name="email" placeholder="Entrez votre email" value="{{ old('email') }}">
    </div>
        @if($errors->has('email'))
            <p class="help is-danger">{{ $errors->first('email') }}</p>
        @endif
</div>


<div class="field">
    <label class="label">Mot de passe</label>
    <div class="control">
        <input class="input" type="password" name="password" placeholder="Entrez votre mot de passe">
    </div>
        @if($errors->has('password'))
            <p class="help is-danger">{{ $errors->first('password') }}</p>
        @endif
</div>


<div class="control">
  <button class="button is-primary">Se connecter</button>
</div>
@endsection