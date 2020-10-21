<?php

namespace App\Http\Controllers;

use App\Compte;
use Illuminate\Http\Request;

class ApicompteController extends Controller
{
    public function create(Request $request)
    {
        $comptes = new Compte();
        $comptes->numero = $request->input('numero');
        $comptes->client_id = $request->input('client_id');
        $comptes->solde = $request->input('solde');

        //echo $comptes->client_id;
        $comptes->save();
        return response()->json($comptes);
        //$cptes = Compte::all();
        //var_dump($cptes);
        //die;
        
    }

    public function show()
    {
        $comptes = Compte::all();
        return response()->json($comptes);
    }

    
}
