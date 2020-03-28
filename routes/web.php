<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


//---------------- INSCRIPTION --------------------------------------

Route::get('/inscription', 'InscriptionController@formulaire');
Route::post('/inscription', 'InscriptionController@traitement');




//---------------- CONNEXION ----------------------------------------

Route::get('/connexion', 'ConnexionController@formulaire');
Route::post('/connexion', 'ConnexionController@traitement');




//-------------- MON COMPTE ----------------------------------------

Route::get('/compte-admin', 'CompteController@accueil_admin');
Route::get('/compte-users', 'CompteController@accueil_users');


// ------------- DECONNEXION ----------------------------------------

Route::get('deconnexion', 'CompteController@deconnexion');



//------------------- LISTES  ----------------------------------------------

Route::get('liste-utilisateurs', 'Liste_utilController@voir_util');



// ----------------- MOT DE PASSE --------------------------------------------

Route::get('/modifier-mdp', 'Modifier_mdpController@formulaire');
Route::post('/modifier-mdp', 'Modifier_mdpController@update_mdp');



//------------------- CONFIDENTIALITE ----------------------------------------

    Route::get('/confidentialite', 'ConfidController@formulaire');

    //------NOM 
    Route::get('/modifier-nom', 'Modifier_nomController@formulaire');
    Route::post('/modifier-nom', 'Modifier_nomController@update_mdp');

    //------PRENOM 
    Route::get('/modifier-prenom', 'Modifier_prenomController@formulaire');
    Route::post('/modifier-prenom', 'Modifier_prenomController@update_mdp');


    //------EMAIL 
    Route::get('/modifier-email', 'Modifier_emailController@formulaire');
    Route::post('/modifier-email', 'Modifier_emailController@update_mdp');


//----------------  PAGE USERS ------------------------------------------
    //------ RESERVER 
    Route::get('/reserver', 'ReserverController@formulaire');
    Route::post('/reserver', 'ReserverController@traitement');

    //------ CONSULTER RANG---------------
    Route::get('/consulter-rang', 'ConsulterController@formulaire');

    //------ CONSULTER HISTORIQUE ------------
    Route::get('/consulter-historique-users', 'ConsulterController@formulaire_historique');