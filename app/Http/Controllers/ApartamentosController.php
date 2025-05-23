<?php

namespace App\Http\Controllers;

use App\Models\Apartamento;
use Illuminate\Http\Request;

class ApartamentosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $apartamentos = Apartamento::all();
        return view('apartamentos.index', compact('apartamentos'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('apartamentos.crear');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Apartamento::create($request->all());
        return redirect('/apartamentos');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $apartamento = Apartamento::findOrFail($id);
        return view('apartamentos.mostrar', compact('apartamento'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $apartamento = Apartamento::findOrFail($id);
        return view('apartamentos.editar', compact('apartamento'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $apartamento = Apartamento::findOrFail($id);
        $apartamento->update($request->all());
        return redirect('/apartamentos');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $apartamento = Apartamento::findOrFail($id);
        $apartamento->delete();
        return redirect('/apartamentos');
    }
}
