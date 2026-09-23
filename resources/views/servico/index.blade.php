@extends('layouts.app')
 
@section('title', 'Serviços')
 
@section('content')
 
<div class="page-header">
    <h1 class="h3 mb-0"><i class="bi bi-tools text-warning"></i> Serviços</h1>
    <div class="d-flex gap-2">
        <a href="{{ route('home') }}" class="btn btn-outline-secondary">
            <i class="bi bi-arrow-left"></i> Voltar
        </a>
        <a href="{{ route('servico.create') }}" class="btn btn-warning text-white">
            <i class="bi bi-plus-circle"></i> Novo Serviço
        </a>
    </div>
</div>
 
<div class="card page-card">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-hover align-middle mb-0">

            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Preço</th>
                    <th>Ações</th>
                </tr>
            </thead>

            <tbody>
                @foreach($servicos as $s)
                    <tr>
                        <td>{{ $s->id }}</td>
                        <td>{{ $s->nome }}</td>
                        <td>R$ {{ $s->preco }}</td>
                        <td class="d-flex gap-2">
                            <a href="/servico/{{ $s->id }}/edit" class="btn btn-sm btn-warning">Editar</a>
                            <a href="/servico/{{ $s->id }}" class="btn btn-sm btn-info">Consultar</a>

                            <form action="/servico/{{ $s->id }}" method="post">
                                @csrf
                                @method('DELETE')

                                <button type="submit" class="btn btn-sm btn-danger"
                                    onclick="return confirm('Tem certeza que deseja excluir este serviço?')">
                                    Excluir
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
            </table>
        </div>
    </div>
</div>
 
@endsection
