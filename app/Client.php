<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $table = 'clients';
    protected $fillable = ['nom','prenom','adresse','telephone'];

    public function comptes()
    {
        return $this->hasMany('App\Compte');
    }

    public function __toString()
    {
        return $this->nom;
    }

}
