@extends('layout')

@section('contenu')
</br>
<div class="title m-b-md">
    <ins>Inscrivez-vous ici</ins>  
</div>
<form class="section" action="/inscription" method="post" style="background-color: #E9E9EA;">
    {{ csrf_field() }}

    <div class="field">
        <label class="label">Nom</label>
        <div class="control">
            <input class="input" type="text" name="nom" placeholder="Entrez votre nom" value="{{ old('nom') }}">
        </div>
            @if($errors->has('nom'))
                <p class="help is-danger">{{ $errors->first('nom') }}</p>
            @endif
    </div>



    <div class="field">
        <label class="label">Prenom</label>
        <div class="control">
            <input class="input" type="text" name="prenom" placeholder="Entrez votre prenom" value="{{ old('prenom') }}">
        </div>
            @if($errors->has('prenom'))
                <p class="help is-danger">{{ $errors->first('prenom') }}</p>
            @endif
    </div>


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


    <div class="field">
        <label class="label">Confirmer mot de passe</label>
        <div class="control">
            <input class="input" type="password" name="password_confirmation" placeholder="Entrez votre mot de passe">
        </div>
            @if($errors->has('password_confirmation'))
                <p class="help is-danger">{{ $errors->first('password_confirmation') }}</p>
            @endif
    </div>


    <div class="control">
        <button class="button is-primary">S'inscrire</button>
    </div>

</form>

@endsection


