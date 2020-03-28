@extends('layout')

@section('contenu')

<style>
table, td, th {  
  border: 1px solid #ddd;
  text-align: left;
}
th {
    background-color:#E8E8EA;
}

table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  padding: 15px;
}


</style>


<div class="title m-b-md">
    <ins>Modifier votre mot de passe ici</ins>  
</div>

<form class="section" action="/modifier-mdp" method="post" style="background-color: #E9E9EA;">
    {{ csrf_field() }}

    <div class="field">
        <label class="label">Nouveau mot de passe</label>
        <div class="control">
            <input class="input" type="password" name="password" placeholder="Entrez votre mot de passe">
        </div>
            @if($errors->has('password'))
                <p class="help is-danger">{{ $errors->first('password') }}</p>
            @endif
    </div>


    <div class="field">
        <label class="label">Confirmer nouveau mot de passe</label>
        <div class="control">
            <input class="input" type="password" name="password_confirmation" placeholder="Entrez votre mot de passe">
        </div>
            @if($errors->has('password_confirmation'))
                <p class="help is-danger">{{ $errors->first('password_confirmation') }}</p>
            @endif
    </div>

    <div class="control">
        <button type="submit" class="button is-primary">Modifier</button>
    </div>

</form>
</br>
<a href="/compte-admin" class="lien" style="color : red;">Retourner sur MON COMPTE</a>

@endsection