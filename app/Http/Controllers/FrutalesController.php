<?php

namespace App\Http\Controllers;


use App\Frutales;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\Response;

class FrutalesController extends Controller
{

    public function index()
    {

        $frutales = Frutales::select("frutales.*")
            ->get();
            return $frutales;

    }

    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        $validators = Validator::make($request->all(),
            [
                'descripcion' => 'required|max:100',

            ]);
        if ($validators->fails())
            return response()->json($validators->messages(), 200);
        $frutal=Frutales::create($request->all());
        return $frutal;
    }


    public function show(Frutales $frutales)
    {

    }

    public function edit(Frutales $frutales)
    {
        //
    }


    public function update(Request $request, Frutales $frutal)
    {
        $validators = Validator::make($request->all(),
            [
                'descripcion' => 'required|max:100',

            ]);
        if ($validators->fails())
            return response()->json($validators->messages(), 200);
        $frutal->update($request->all());
        return $frutal;
    }


    public function destroy(Frutales $frutal)
    {
        $frutal->delete();
        return response()->json(["message" => "Eliminado correctatemente"], 200);
    }
}
