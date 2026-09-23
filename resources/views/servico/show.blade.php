@extends('layouts.app')
 
@section('title', 'Detalhes do Serviço')
 
@section('content')
 
<div class="page-header">
    <h1 class="h3 mb-0"><i class="bi bi-tools text-warning"></i> Detalhes do Serviço</h1>
    <a href="{{ route('servico.index') }}" class="btn btn-outline-secondary">
        <i class="bi bi-arrow-left"></i> Voltar
    </a>
</div>
 
<div class="card page-card">
    <div class="card-body">


        <div class="mb-3">
            <label class="form-label">ID</label>
            <input type="text" class="form-control" value="{{ $servico->id }}" disabled>
        </div>

        <div class="mb-3">
            <label class="form-label">Nome</label>
            <input type="text" class="form-control" value="{{ $servico->nome }}" disabled>
        </div>

        <div class="mb-3">
            <label class="form-label">Preço</label>
            <input type="text" class="form-control" value="{{ $servico->preco }}" disabled>
        </div>

    </div>
</div>
 
@endsection
