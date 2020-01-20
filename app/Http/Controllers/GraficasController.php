<?php

namespace App\Http\Controllers;

use App\Charts\EspecieChart;
use App\Semanales;
use Illuminate\Http\Request;

class GraficasController extends Controller
{
    public function especiesInfo()
    {



        $semanales=Semanales::groupBy("nombre_especie")
            ->havingRaw("count(1)")//Raw sirve para enviar lo escrito textualemente
            ->select("nombre_especie")
            ->selectRaw("count(1) as numero")
            ->get();


        $chart = new EspecieChart();

        $chart->labels($semanales->pluck("nombre_especie"));
        $chart->dataset('Especie','pie',$semanales->pluck('numero'));




        return view('resultados.resultados', compact('chart'));
    }

}
