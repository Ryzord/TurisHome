<?php

namespace App\Http\Controllers;

use App\Models\Apartamento;
use App\Models\Ingreso;
use App\Models\Intermediario;
use App\Models\Tarifa;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class IngresosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ingresos = Ingreso::with('apartamento')->get();
        return view('ingresos.index', compact('ingresos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $apartamentos = Apartamento::all();
        $intermediarios = Intermediario::all();
        $tarifas = Tarifa::all();
        return view('ingresos.crear', compact('apartamentos', 'intermediarios', 'tarifas'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //Aqui vamos a calcular las fechas
        $fecha_entrada = Carbon::parse($request->input('fecha_entrada'));
        $fecha_salida = Carbon::parse($request->input('fecha_salida'));

        $noches = $fecha_entrada->diffInDays($fecha_salida);

        //Aqui vamos a calcular la factura
        $tarifa = Tarifa::findOrFail($request->tarifa_id);
        $precio_base = $tarifa->coste_tarifa * $request->numero_personas * $noches;
        $precio_descuento = $precio_base * ($request->discount / 100);
        $descuento_aplicado = $precio_base - $precio_descuento;
        $total_iva = $descuento_aplicado * ($tarifa->tarifa_aplicada /100);
        $total_factura = $total_iva + $descuento_aplicado;

        //Aqui ya creamos el objeto con sus cosas
        $ingreso = new Ingreso($request->all());
        $ingreso->tarifa_id = $request->tarifa_id;
        $ingreso->total_iva = $total_iva;
        $ingreso->numero_noches = $noches;
        $ingreso->total_factura = $total_factura;
        $ingreso->save();

        return redirect('/ingresos');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $ingreso = Ingreso::with('apartamento', 'intermediario', 'tarifa')->findOrFail($id);
        return view('ingresos.mostrar', compact('ingreso'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $ingreso = Ingreso::findOrFail($id);
        $apartamentos = Apartamento::all();
        $tarifas = Tarifa::all();
        $intermediarios = Intermediario::all();
        return view('ingresos.editar', compact('ingreso', 'apartamentos', 'tarifas', 'intermediarios'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $ingreso = Ingreso::findOrFail($id);

        //Aqui vamos a calcular las fechas
        $fecha_entrada = Carbon::parse($request->input('fecha_entrada'));
        $fecha_salida = Carbon::parse($request->input('fecha_salida'));

        $noches = $fecha_entrada->diffInDays($fecha_salida);

        //Aqui vamos a calcular la factura
        $tarifa = Tarifa::findOrFail($request->tarifa_id);
        $precio_base = $tarifa->coste_tarifa * $request->numero_personas * $noches;
        $precio_descuento = $precio_base * ($request->descuento / 100);
        $descuento_aplicado = $precio_base - $precio_descuento;
        $total_iva = $descuento_aplicado * ($tarifa->tarifa_aplicada /100);
        $total_factura = $total_iva + $descuento_aplicado;

        //Aqui en vez de crear asignamos ya los valores al objeto
        $ingreso->fill($request->all());
        $ingreso->tarifa_id = $request->tarifa_id;
        $ingreso->total_iva = $total_iva;
        $ingreso->numero_noches = $noches;
        $ingreso->total_factura = $total_factura;
        $ingreso->save();

        return redirect('/ingresos');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $ingreso = Ingreso::findOrFail($id);
        $ingreso->delete();
        return redirect('/ingresos');
    }
}
