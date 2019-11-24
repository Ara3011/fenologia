<?php

namespace App\Http\Controllers;

use App\HojasAnchas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\Response;

class HojasAnchasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hojaancha = HojasAnchas::select("forestales_hojas_anchas.*")
            ->get();
        return $hojaancha;
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
        $hojaancha=HojasAnchas::create($request->all());
        return $hojaancha;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\HojasAnchas  $hojasAnchas
     * @return \Illuminate\Http\Response
     */
    public function show(HojasAnchas $hojasAnchas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\HojasAnchas  $hojasAnchas
     * @return \Illuminate\Http\Response
     */
    public function edit(HojasAnchas $hojasAnchas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\HojasAnchas  $hojasAnchas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, HojasAnchas $hojasAnchas)
    {
        $validators = Validator::make($request->all(),
            [
                'descripcion' => 'required|max:100',

            ]);
        if ($validators->fails())
            return response()->json($validators->messages(), 200);
        $hojasAnchas->update($request->all());
        return $hojasAnchas;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\HojasAnchas  $hojasAnchas
     * @return \Illuminate\Http\Response
     */
    public function destroy(HojasAnchas $hojasAnchas)
    {
        $hojasAnchas->delete();
        return response()->json(["message" => "Eliminado correctatemente"], 200);
    }
}
