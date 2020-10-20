<?php

namespace App\Http\Controllers;

use App\Operation;
use Illuminate\Http\Request;

class ApioperationController extends Controller
{
    public function create(Request $request)
    {
        $operations = new Operation();
        $operations->typeoperation = $request->input('typeoperation');
        $operations->montant = $request->input('montant');
        $operations->dateoperation = $request->input('dateoperation');
        $operations->compte_id = $request->input('compte_id');

        $operations->save();
        return response()->json($operations);
    }

    public function show()
    {
        $operations = Operation::all();
        return response()->json($operations);
    }

    public function showById($id)
    {
        $operations = Operation::find($id);
        return response()->json($operations);
    }
}
