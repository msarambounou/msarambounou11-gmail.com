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


    <h4 class="title is-6">CONSULTER VOTRE RANG</h4>


   
  
    <table style="">
        <tr>
          <th>N° de reservation</th>
          <th>Date et heure</th>
        </tr>
        <tr>
        @foreach($historiques as $historiques_reservations)
          <td>{{ $historiques_reservations ->id}}</td>
          <td>{{ $historiques_reservations ->created_at}}</td>
        </tr>
        <tr>
        @endforeach
</table>
   
@endsection