<?php

namespace App\Http\Controllers;

use App\Frutales;
use App\Semanales;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class SemanalesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $semanales = Semanales::select("registros_semanales.*")
            ->get();
        return $semanales;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $validators = Validator::make($request->all(),
            [
                'nombre' => 'required',
                'correo' => 'required',
                'rancheria' => 'required',
                'nombre_comunidad' => 'required',
                'municipio' => 'required',
                'id_estado' => 'required',
                'fecha' => ['required', 'date', 'max:255'],
                'nombre_especie' => 'required',
                'id_fasefeno' => 'required',
                'id_observacionc' => 'required',

            ]);
        if ($validators->fails())
            return response()->json($validators->messages(), 200);
        $semanal = Semanales::create($request->all());
        return $semanal;

    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
