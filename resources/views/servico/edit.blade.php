@extends('layouts.app')
 
@section('title', 'Editar Serviço')
 
@section('content')
 
<div class="page-header">
    <h1 class="h3 mb-0"><i class="bi bi-tools text-warning"></i> Editar Serviço</h1>
    <a href="{{ route('servico.index') }}" class="btn btn-outline-secondary">
        <i class="bi bi-arrow-left"></i> Voltar
    </a>
</div>
 
<div class="card page-card">
    <div class="card-body">


        <form action="{{ route('servico.update', $servico->id) }}" method="post">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="nome" class="form-label">Nome</label>
                <input type="text" id="nome" name="nome" class="form-control" value="{{ $servico->nome }}" required="">
            </div>

            <div class="mb-3">
                <label for="preco" class="form-label">Preço</label>
                <input type="number" id="preco" name="preco" class="form-control" value="{{ $servico->preco }}" required="">
            </div>

            <button type="submit" class="btn btn-primary">Salvar</button>
        </form>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>

    </div>
</div>
 
@endsection
