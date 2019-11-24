<?php

namespace App\Http\Controllers;

use App\Coniferas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\Response;

class ConiferasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $conifera = Coniferas::select("forestales_coniferas.*")
            ->get();
        return $conifera;
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
        $conifera=Coniferas::create($request->all());
        return $conifera;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Coniferas  $coniferas
     * @return \Illuminate\Http\Response
     */
    public function show(Coniferas $coniferas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Coniferas  $coniferas
     * @return \Illuminate\Http\Response
     */
    public function edit(Coniferas $coniferas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Coniferas  $coniferas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Coniferas $conifera)
    {
        $validators = Validator::make($request->all(),
            [
                'descripcion' => 'required|max:100',

            ]);
        if ($validators->fails())
            return response()->json($validators->messages(), 200);
        $conifera->update($request->all());
        return $conifera;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Coniferas  $coniferas
     * @return \Illuminate\Http\Response
     */
    public function destroy(Coniferas $conifera)
    {
        $conifera->delete();
        return response()->json(["message" => "Eliminado correctatemente"], 200);

    }
}
