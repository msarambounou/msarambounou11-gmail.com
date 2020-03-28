@extends('layout')

@section('contenu')

<h1>Voici la liste des utilisateurs</h1>
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


<table style="width:80%">
        <tr>
            <th>Id</th>
            <th>Nom</th>
            <th>Prenom</th>
            <th>Email</th>
            <th>Mot de passe</th>
            <th>Modifier le mot de passe</th>
        </tr>
        <tr>
        @foreach($clients as $clients)
            <td>{{ $clients ->id}}</td>
            <td>{{ $clients ->nom}}</td>
            <td>{{ $clients ->prenom}}</td>
            <td>{{ $clients ->email}}</td>
            <td>*****************</td>
            <td><button>Modifier le mot de passe</button><button>Supprimer user</button></td>
        </tr>
        <tr>
    @endforeach
</table>
</br>
<a href="/compte-admin" class="lien" style="color : red;">Retourner sur MON COMPTE</a>

@endsection