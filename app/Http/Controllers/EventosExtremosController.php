<?php

namespace App\Http\Controllers;

use App\EventosExtremos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\Response;

class EventosExtremosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $eventoExtremo = EventosExtremos::select("eventos_extremos.*")
            ->get();
        return $eventoExtremo;

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
        $eventoExtremo=EventosExtremos::create($request->all());
        return $eventoExtremo;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\EventosExtremos  $eventosExtremos
     * @return \Illuminate\Http\Response
     */
    public function show(EventosExtremos $eventosExtremos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\EventosExtremos  $eventosExtremos
     * @return \Illuminate\Http\Response
     */
    public function edit(EventosExtremos $eventosExtremos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\EventosExtremos  $eventosExtremos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, EventosExtremos $eventoExtremo)
    {
        $validators = Validator::make($request->all(),
            [
                'descripcion' => 'required|max:100',

            ]);
        if ($validators->fails())
            return response()->json($validators->messages(), 200);
        $eventoExtremo->update($request->all());
        return $eventoExtremo;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\EventosExtremos  $eventosExtremos
     * @return \Illuminate\Http\Response
     */
    public function destroy(EventosExtremos $eventoExtremo)
    {
        //
        $eventoExtremo->delete();
        return response()->json(["message" => "Eliminado correctatemente"], 200);
    }
}
