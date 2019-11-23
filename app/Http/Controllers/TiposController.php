<?php

namespace App\Http\Controllers;

use App\Tipos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\Response;

class TiposController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tipos = Tipos::select("tipos.*")
            ->get();
        return $tipos;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validators = Validator::make($request->all(),
            [
                'descripcion' => 'required|max:100',

            ]);
        if ($validators->fails())
            return response()->json($validators->messages(), 200);
        $tipo=Tipos::create($request->all());
        return $tipo;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Tipos  $tipos
     * @return \Illuminate\Http\Response
     */
    public function show(Tipos $tipos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tipos  $tipos
     * @return \Illuminate\Http\Response
     */
    public function edit(Tipos $tipos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tipos  $tipos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tipos $tipo)
    {
        $validators = Validator::make($request->all(),
            [
                'descripcion' => 'required|max:100',

            ]);
        if ($validators->fails())
            return response()->json($validators->messages(), 200);
        $tipo->update($request->all());
        return $tipo;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tipos  $tipos
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tipos $tipo)
    {
        $tipo->delete();
        return response()->json(["message" => "Eliminado correctatemente"], 200);
    }
}
