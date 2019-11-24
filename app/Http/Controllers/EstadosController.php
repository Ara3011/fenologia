<?php

namespace App\Http\Controllers;

use App\Estados;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\Response;

class EstadosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $estado = Estados::select("estados.*")
            ->get();
        return $estado;
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
        $estado=Estados::create($request->all());
        return $estado;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Estados  $estados
     * @return \Illuminate\Http\Response
     */
    public function show(Estados $estados)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Estados  $estados
     * @return \Illuminate\Http\Response
     */
    public function edit(Estados $estados)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Estados  $estados
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Estados $estado)
    {
        $validators = Validator::make($request->all(),
            [
                'descripcion' => 'required|max:100',

            ]);
        if ($validators->fails())
            return response()->json($validators->messages(), 200);
        $estado->update($request->all());
        return $estado;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Estados  $estados
     * @return \Illuminate\Http\Response
     */
    public function destroy(Estados $estado)
    {
        $estado->delete();
        return response()->json(["message" => "Eliminado correctatemente"], 200);

    }
}
