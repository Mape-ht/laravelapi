<?php

namespace App\Http\Controllers;

use App\Client;
use Illuminate\Http\Request;

class ApiclientController extends Controller
{
    public function create(Request $request){

        /*$clients = new Client();
        $clients->nom = $request->input('nom');
        $clients->prenom = $request->input('prenom');
        $clients->adresse = $request->input('adresse');
        $clients->telephone = $request->input('telephone');

        
        $clients->save();
        return response()->json($clients);*/

        $clients = Client::create($request->all());
        return response()->json($clients);

    }

    public function show()
    {
        $clients = Client::all();
        return response()->json($clients);
        //foreach($clients as $c){

            //var_dump($c->comptes);
        }
        //return response()->json($clients);

        public function showById($id)
    {
        $clients = Client::find($id);
        return response()->json($clients);
    }

    }
    /*
    *@* @param int $id
    *@return \Illuminate\Http\Response
    */
    

