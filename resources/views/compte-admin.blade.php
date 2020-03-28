@extends('layout')

@section('contenu')
<style>
button {
    width: 680px;
}

button:hover {
    background-color: #D7D7D7;
  color: black;
  border: 2px solid #e7e7e7;
}
td{
    padding-right: 20px;
    padding-bottom: 20px;

}
</style>
   
     <h4 class="title is-6">Espace ADMIN</h4>


    <div class="section">
        <h1 class="title is-1">Bonjour, {{ auth()->user()->prenom }}</h1>
    </div>

   <table>
        <tr>
            <td>
            <a href="liste-utilisateurs"><button class="button is-large">
                    <span class="icon is-medium">
                    <i class="fa fa-car"></i>
                    </span>
                    <span>Voir la liste des utilisateurs</span>
                </button></a>
            </td>

            
            <td>
                <a href="confidentialite"><button class="button is-large">
                    <span class="icon is-medium">
                    <i class="fa fa-eye"></i>
                    </span>
                    <span>Confidentialité</span>
                </button></a>
            </td>
                        
        </tr>
    </table>



  
   
   
@endsection

