<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\SessionGuard;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as BasicAuthenticatable;


class client extends Model implements Authenticatable
{
    use BasicAuthenticatable;
   
    protected $fillable = ['nom', 'prenom', 'email', 'password', 'mdp'];

/**
     * Get the password for the user.
     *
     * @return string
     */
    public function getAuthPassword()
    {
        return $this->mdp;
    }

    //---- Relation entre CLIENT et DEMANDE ------------------
    public function demande()
    {
        return $this->hasOne('App\demandes', 'App\clients');
        
    }


    // Recupère le role de l'users ADMIN ou NON
    public function isRole(){
        return $this->role;
    }
}
