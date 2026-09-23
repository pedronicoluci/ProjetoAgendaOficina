@extends('layouts.app')
 
@section('title', 'Detalhes do Cliente')
 
@section('content')
 
<div class="page-header">
    <h1 class="h3 mb-0"><i class="bi bi-people-fill text-primary"></i> Detalhes do Cliente</h1>
    <a href="{{ route('cliente.index') }}" class="btn btn-outline-secondary">
        <i class="bi bi-arrow-left"></i> Voltar
    </a>
</div>
 
<div class="card page-card">
    <div class="card-body">


        <div class="mb-3">
            <label class="form-label">ID</label>
            <input type="text" class="form-control" value="{{ $cliente->id }}" disabled>
        </div>

        <div class="mb-3">
            <label class="form-label">Nome</label>
            <input type="text" class="form-control" value="{{ $cliente->nome }}" disabled>
        </div>

        <div class="mb-3">
            <label class="form-label">Telefone</label>
            <input type="text" class="form-control" value="{{ $cliente->telefone }}" disabled>
        </div>
    </div>
</div>
 
@endsection
