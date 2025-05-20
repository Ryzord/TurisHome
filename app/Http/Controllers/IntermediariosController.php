<?php

namespace App\Http\Controllers;

use App\Models\Intermediario;
use Illuminate\Http\Request;

class IntermediariosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $intermediarios = Intermediario::all();
        return view('intermediarios.index', compact('intermediarios'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('intermediarios.crear');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Intermediario::create($request->all());
        return redirect('/intermediarios');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $intermediario = Intermediario::findOrFail($id);
        return view('intermediarios.mostrar', compact('intermediario'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $intermediario = Intermediario::findOrFail($id);
        return view('intermediarios.editar', compact('intermediario'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $intermediario = Intermediario::findOrFail($id);
        $intermediario->update($request->all());
        return redirect('/intermediarios');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $intermediario = Intermediario::findOrFail($id);
        $intermediario->delete();
        return redirect('/intermediarios');
    }
}
