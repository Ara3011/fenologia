<?php

namespace App\Http\Controllers;


use App\Frutales;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\Response;

class FrutalesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $frutales = Frutales::select("frutales.*")
            ->get();
            return $frutales;

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
        $frutales=Frutales::create($request->all());
        return $frutales;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Frutales  $frutales
     * @return \Illuminate\Http\Response
     */
    public function show(Frutales $frutales)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Frutales  $frutales
     * @return \Illuminate\Http\Response
     */
    public function edit(Frutales $frutales)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Frutales  $frutales
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Frutales $frutales)
    {
        $validators = Validator::make($request->all(),
            [
                'descripcion' => 'required|max:100',

            ]);
        if ($validators->fails())
            return response()->json($validators->messages(), 200);
        $frutales->update($request->all());
        return $frutales;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Frutales  $frutales
     * @return \Illuminate\Http\Response
     */
    public function destroy(Frutales $frutales)
    {
        //
        $frutales->delete();
        return response()->json(["message" => "Eliminado correctatemente"], 200);
    }
}
