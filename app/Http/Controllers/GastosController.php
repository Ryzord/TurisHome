<?php

namespace App\Http\Controllers;

use App\Models\Apartamento;
use App\Models\Gasto;
use Illuminate\Http\Request;

class GastosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $gastos = Gasto::with('apartamento')->get();
        return view('gastos.index', compact('gastos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $apartamentos = Apartamento::all();
        return view('gastos.crear', compact('apartamentos'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $gasto = new Gasto($request->all());
        $gasto->calcularTotal();
        $gasto->save();
        return redirect('/gastos');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $gasto = Gasto::with('apartamento')->findOrFail($id);
        return view('gastos.mostrar', compact('gasto'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $gasto = Gasto::findOrFail($id);
        $apartamentos = Apartamento::all();
        return view('gastos.editar', compact('gasto', 'apartamentos'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $gasto = Gasto::findOrFail($id);
        $gasto->update($request->all());
        return redirect('/gastos');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

        $gasto = Gasto::findOrFail($id);
        $gasto->delete();
        return redirect('/gastos');
    }
}
