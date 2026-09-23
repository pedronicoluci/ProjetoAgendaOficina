<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Moto;
use Illuminate\Http\Request;

class MotoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $motos = Moto::with('cliente')->get();
        return view('moto.index', compact('motos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $clientes = Cliente::all();
        return view('moto.create', compact('clientes'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Moto::create($request->all());
        return redirect()->route('moto.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $moto = Moto::findOrFail($id);
        return view('moto.show', compact('moto'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $moto = Moto::findOrFail($id);
        $clientes = Cliente::all();
        return view('moto.edit', compact('moto', 'clientes'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $moto = Moto::findOrFail($id);
        $moto->update($request->all());
        return redirect()->route('moto.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $moto = Moto::findOrFail($id);
        $moto->delete();
        return redirect()->route('moto.index');
    }
}
