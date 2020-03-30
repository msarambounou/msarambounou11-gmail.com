<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class places extends Model
{
    protected $fillable = ['id_clients', 'dispo'];

    public function client()
    {
        return $this->hasOne(client::class);
    }
}