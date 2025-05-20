<?php

namespace App\Http\Controllers;

use App\Models\Tarifa;
use Illuminate\Http\Request;

class TarifasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tarifas = Tarifa::all();
        return view('tarifas.index', compact('tarifas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tarifas.crear');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Tarifa::create($request->all());
        return redirect('/tarifas');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $tarifa = Tarifa::findOrFail($id);
        return view('tarifas.mostrar', compact('tarifa'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $tarifa = Tarifa::findOrFail($id);
        return view('tarifas.editar', compact('tarifa'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $tarifa = Tarifa::findOrFail($id);
        $tarifa->update($request->all());
        return redirect('/tarifas');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $tarifa = Tarifa::findOrFail($id);
        $tarifa->delete();
        return redirect('/tarifas');
    }
}
