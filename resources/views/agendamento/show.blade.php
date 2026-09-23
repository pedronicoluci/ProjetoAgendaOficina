@extends('layouts.app')
 
@section('title', 'Detalhes do Agendamento')
 
@section('content')
 
<div class="page-header">
    <h1 class="h3 mb-0"><i class="bi bi-calendar2-check-fill text-danger"></i> Detalhes do Agendamento</h1>
    <a href="{{ route('agendamento.index') }}" class="btn btn-outline-secondary">
        <i class="bi bi-arrow-left"></i> Voltar
    </a>
</div>
 
<div class="card page-card">
    <div class="card-body">


        <div class="mb-3">
            <label class="form-label">ID</label>
            <input type="text" class="form-control" value="{{ $agendamento->id }}" disabled>
        </div>
        <div class="mb-3">
            <label class="form-label">Moto</label>
            <input type="text" class="form-control" value="{{ $agendamento->moto->marca }} - {{ $agendamento->moto->modelo }}" disabled>
        </div>
        <div class="mb-3">
            <label class="form-label">Serviço</label>
            <input type="text" class="form-control" value="{{ $agendamento->servico->nome }}" disabled>
        </div>
        <div class="mb-3">
            <label class="form-label">Data</label>
            <input type="date" class="form-control" value="{{ $agendamento->data }}" disabled>
        </div>
        <div class="mb-3">
            <label class="form-label">Horario</label>
            <input type="time" class="form-control" value="{{ $agendamento->horario }}" disabled>
        </div>
        <div class="mb-3">
            <label class="form-label">Status</label>
            <input type="text" class="form-control" value="{{ $agendamento->status }}" disabled>
        </div>

    </div>
</div>
 
@endsection
