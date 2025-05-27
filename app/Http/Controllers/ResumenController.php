<?php

namespace App\Http\Controllers;

use App\Models\Gasto;
use App\Models\Ingreso;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ResumenController extends Controller
{
    public function index()
    {

        // aqui vamos a obtener todos los ingresos y gastos
        $ingresos = Ingreso::all();
        $gastos = Gasto::all();


        // aqui vamos a calcular todos los ingresos y todos los gastos
        $totalIngresos = $ingresos->sum('total_factura');
        $totalGastos = $gastos->sum('total_gasto');


        // $beneficios = $totalIngresos - $totalGastos;

        // calculamos los iva's por separado
        // $ivaIngresos = $ingresos->sum('total_iva');
        // $ivaGastos = $gastos->sum('total_iva');

        // $ivaResultado = $ivaIngresos - $ivaGastos;

        return view('dashboard', [
            'totalIngresos' => $totalIngresos,
            'totalGastos' => $totalGastos,
            // 'ivaIngresos' => $ivaIngresos,
            // 'ivaGastos' => $ivaGastos,
            // 'ivaResultado' => $ivaResultado,
        ]);
    }

    public function calcularTrimestre(Request $request)
    {
        $trimetre = $request->trimestre;
        $año = Carbon::now()->year;
        // $año = 2024;

        switch ($trimetre) {
            case 0:
                $inicioTrimestre = Carbon::create($año, 1, 1)->startOfDay();
                $finTrimestre = Carbon::create($año, 12, 31)->endOfDay();
                break;
            case 1:
                $inicioTrimestre = Carbon::create($año, 1, 1)->startOfDay();
                $finTrimestre = Carbon::create($año, 3, 31)->endOfDay();
                break;
            case 2:
                $inicioTrimestre = Carbon::create($año, 4, 1)->startOfDay();
                $finTrimestre = Carbon::create($año, 6, 30)->endOfDay();
                break;
            case 3:
                $inicioTrimestre = Carbon::create($año, 7, 1)->startOfDay();
                $finTrimestre = Carbon::create($año, 9, 30)->endOfDay();
                break;
            case 4:
                $inicioTrimestre = Carbon::create($año, 10, 1)->startOfDay();
                $finTrimestre = Carbon::create($año, 12, 31)->endOfDay();
                break;
            default:
                return "Error al calcular las fechas";
                break;
        }

        //Obtenemos los ingresos que esten en la fecha donde coincida el trimestre
        $trimestreIngresos = Ingreso::whereBetween('fecha_entrada', [$inicioTrimestre, $finTrimestre])->get();
        $trimestreGastos = Gasto::whereBetween('fecha', [$inicioTrimestre, $finTrimestre])->get();


        //Sumamos el iva de cada uno, ya teniendo en cuenta la fecha
        $totalTrimestreIngresos = $trimestreIngresos->sum('total_iva');
        $totalTrimestreGastos = $trimestreGastos->sum('total_iva');

        $trimestreLiquidacion = $totalTrimestreIngresos - $totalTrimestreGastos;

        // tenemos que volver a hacer lo siguiente (aunq este hecho en el index), para que al darle a calcular se sigan poniendo los gastos e ingresos
        $ingresos = Ingreso::all();
        $gastos = Gasto::all();

        $totalIngresos = $ingresos->sum('total_factura');
        $totalGastos = $gastos->sum('total_gasto');




        return view('dashboard', [
            'totalTrimestreIngresos' => $totalTrimestreIngresos,
            'totalTrimestreGastos' => $totalTrimestreGastos,
            'trimestreLiquidacion' => $trimestreLiquidacion,
            'totalIngresos' => $totalIngresos,
            'totalGastos' => $totalGastos,
        ]);

    }
}
