<?php

namespace App\Http\Controllers;

use App\Charts\EspecieChart;
use App\Semanales;
use Illuminate\Http\Request;

class GraficasController extends Controller
{
    public function userInfo()
    {
        $semanales =Semanales::all();
        $semanales ->map(static function ($semanal) {
            $semanal= Semanales::whereIdRegistrosem($semanal->nombre_especie)->count();

            return $semanal;
        });


        $chart = new EspecieChart();
        $chart->labels($semanales->pluck('nombre_especie'));

        return view('resultados.resultados', compact('chart'));
    }

}
