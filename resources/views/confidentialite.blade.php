@extends('layout')

@section('contenu')
<h1>Paramètres généraux du compte</h1>
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

<table style="width:70%">
  <tr>
    <th>Nom</th>
    <td>{{ auth()->user()->nom }}</td>
    <td><a href="modifier-nom"><button>Modifier</button></a></td>
  </tr>

  <tr>
    <th>Prenom</th>
    <td>{{ auth()->user()->prenom }}</td>
    <td><a href="modifier-prenom"><button>Modifier</button></a></td>
  </tr>

  <tr>
    <th>Email</th>
    <td>{{ auth()->user()->email }}</td>
    <td><a href="modifier-email"><button>Modifier</button></a></td>
  </tr>

  <tr>
    <th>Mot de passe</th>
    <td>**************</td>
    <td><a href="modifier-mdp"><button>Modifier</button></a></td>
  </tr>
  
</table>

</br>
<a href="/compte-admin" class="lien" style="color : red;">Retourner sur MON COMPTE</a>

@endsection