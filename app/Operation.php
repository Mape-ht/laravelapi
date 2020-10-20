<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Operation extends Model
{
    protected $table = 'operations';
    protected $fillable =['typeoperation','montant','dateoperation','compte_id'];

    public function comptes()
    {
        return $this->belongsTo('App\Compte');
    }
}
