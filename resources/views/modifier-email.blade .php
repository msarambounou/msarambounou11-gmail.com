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
    <ins>Modifier votre email ici*</ins>  
    <h3>*Seulement dans le cas ou vous avez un nouveau email</h3>
</div>

<form class="section" action="/modifier-email" method="post" style="background-color: #E9E9EA;">
    {{ csrf_field() }}

    <div class="field">
        <label class="label">Nouveau email</label>
        <div class="control">
            <input class="input" type="email" name="email" placeholder="Entrez votre nouveau email" value="{{ old('email') }}">
        </div>
            @if($errors->has('email'))
                <p class="help is-danger">{{ $errors->first('email') }}</p>
            @endif
    </div>

    <div class="control">
        <button type="submit" class="button is-primary">Modifier</button>
    </div>

</form>
</br>
<a href="/compte-admin" class="lien" style="color : red;">Retourner sur MON COMPTE</a>

@endsection