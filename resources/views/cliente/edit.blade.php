@extends('layouts.app')

@section('title', 'Editar Cadastro')

@section('content')

<div class="page-header">
    <h1 class="h3 mb-0">Editar Cadastro</h1>
    <a href="{{ route('cliente.index') }}" class="btn btn-outline-secondary">
        <i class="bi bi-arrow-left"></i> Voltar
    </a>
</div>

<div class="card page-card">
    <div class="card-body">

        <form action="{{ route('cliente.update', $cliente->id) }}" method="post">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="nome" class="form-label">Nome</label>
                <input type="text" id="nome" name="nome" class="form-control" value="{{ $cliente->nome }}" required="">
            </div>

            <div class="mb-3">
                <label for="telefone" class="form-label">Telefone</label>
                <input type="text" id="telefone" name="telefone" class="form-control" value="{{ $cliente->telefone }}" required="">
            </div>

            <button type="submit" class="btn btn-primary">Salvar</button>
        </form>

    </div>
</div>

@endsection