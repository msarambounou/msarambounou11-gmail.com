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
    <ins>Modifier votre nom ici</ins>  
</div>

<form class="section" action="/modifier-nom" method="post" style="background-color: #E9E9EA;">
    {{ csrf_field() }}

    <div class="field">
        <label class="label">Nouveau nom</label>
        <div class="control">
            <input class="input" type="text" name="nom" placeholder="Entrez votre nouveau nom" value="{{ old('nom') }}">
        </div>
            @if($errors->has('nom'))
                <p class="help is-danger">{{ $errors->first('nom') }}</p>
            @endif
    </div>


    <div class="control">
        <button type="submit" class="button is-primary">Modifier</button>
    </div>

</form>
</br>
<a href="/compte-admin" class="lien" style="color : red;">Retourner sur MON COMPTE</a>

@endsection