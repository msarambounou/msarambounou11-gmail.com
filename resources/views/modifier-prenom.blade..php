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

<form class="section" action="/modifier-prenom" method="post" style="background-color: #E9E9EA;">
    {{ csrf_field() }}

    <div class="field">
        <label class="label">Nouveau prenom</label>
        <div class="control">
            <input class="input" type="text" name="prenom" placeholder="Entrez votre nouveau prenom" value="{{ old('prenom') }}">
        </div>
            @if($errors->has('prenom'))
                <p class="help is-danger">{{ $errors->first('prenom') }}</p>
            @endif
    </div>


    <div class="control">
        <button type="submit" class="button is-primary">Modifier</button>
    </div>

</form>
</br>
<a href="/compte-admin" class="lien" style="color : red;">Retourner sur MON COMPTE</a>

@endsection