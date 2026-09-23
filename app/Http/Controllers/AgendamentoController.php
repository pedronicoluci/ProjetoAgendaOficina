<?php

namespace App\Http\Controllers;

use App\Models\Agendamento;
use App\Models\Moto;
use App\Models\Servico;
use Illuminate\Http\Request;

class AgendamentoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $agendamentos = Agendamento::with('moto', 'servico')->get();
        return view('agendamento.index', compact('agendamentos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $motos = Moto::all();
        $servicos = Servico::all();
        $statusOptions = [
            'agendado' => 'Agendado',
            'confirmado' => 'Confirmado',
            'em_andamento' => 'Em andamento',
            'concluido' => 'Concluído',
            'canceado' => 'Cancelado',
            'nao_compareceu' => 'Não compareceu',
        ];

        return view('agendamento.create', compact('motos', 'servicos', 'statusOptions'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Agendamento::create($request->all());
        return redirect()->route('agendamento.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $agendamento = Agendamento::findOrFail($id);
        return view('agendamento.show', compact('agendamento'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $agendamento = Agendamento::findOrFail($id);
        $motos = Moto::all();
        $servicos = Servico::all();
        $statusOptions = [
            'agendado' => 'Agendado',
            'confirmado' => 'Confirmado',
            'em_andamento' => 'Em andamento',
            'concluido' => 'Concluído',
            'canceado' => 'Cancelado',
            'nao_compareceu' => 'Não compareceu',
        ];
        return view('agendamento.edit', compact('agendamento', 'motos', 'servicos', 'statusOptions'));
    }
    
    /**
     * Update the specified resource in storage.
    */
    public function update(Request $request, string $id)
    {
        $agendamento = Agendamento::findOrFail($id);
        $agendamento->update($request->all());
        return redirect()->route('agendamento.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $agendamento = Agendamento::findOrFail($id);
        $agendamento->delete();
        return redirect()->route('agendamento.index');
    }
}
