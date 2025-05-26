<?php

namespace App\Http\Controllers;

use App\Models\Gasto;
use App\Models\Ingreso;
use Illuminate\Http\Request;

class ResumenController extends Controller
{
    public function index(){

        // aqui vamos a obtener todos los ingresos y gastos
        $ingresos = Ingreso::all();
        $gastos = Gasto::all();


        // aqui vamos a calcular todos los ingresos y todos los gastos
        $totalIngresos = $ingresos->sum('total_factura');
        $totalGastos = $gastos->sum('total_gasto');

        // $beneficios = $totalIngresos - $totalGastos;

        return view('dashboard', [
            'totalGastos' => $totalGastos,
            'totalIngresos' => $totalIngresos,

        ]);

    }

    public function calcularTrimestre() {

    }
}
