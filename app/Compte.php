<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Compte extends Model
{
    protected $table = 'comptes';
    protected $fillable = ['numero','client_id','solde'];

    public function clients()
    {
        return $this->belongsTo('App\Client');
    }
    public function operations()
    {
        return $this->hasMany('App\Operation');
    }
    public function __toString()
    {
        return $this->numero;
    }
}
