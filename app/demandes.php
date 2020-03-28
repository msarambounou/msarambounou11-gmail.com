<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class demandes extends Model
{
    protected $fillable = ['id_clients'];

    public function client()
    {
        return $this->hasOne(client::class);
    }
}