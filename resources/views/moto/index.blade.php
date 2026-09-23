@extends('layouts.app')
 
@section('title', 'Motos')
 
@section('content')
 
<div class="page-header">
    <h1 class="h3 mb-0"><i class="fa-solid fa-motorcycle text-success"></i> Motos</h1>
    <div class="d-flex gap-2">
        <a href="{{ route('home') }}" class="btn btn-outline-secondary">
            <i class="bi bi-arrow-left"></i> Voltar
        </a>
        <a href="{{ route('moto.create') }}" class="btn btn-success">
            <i class="bi bi-plus-circle"></i> Nova Moto
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
                    <th>Marca</th>
                    <th>Modelo</th>
                    <th>Placa</th>
                    <th>Cliente</th>
                    <th>Ações</th>
                </tr>
            </thead>

            <tbody>
                @foreach($motos as $m)
                    <tr>
                        <td>{{ $m->id }}</td>
                        <td>{{ $m->marca }}</td>
                        <td>{{ $m->modelo }}</td>
                        <td>{{ $m->placa }}</td>
                        <td>{{ $m->cliente->nome }}</td>
                        <td class="d-flex gap-2">
                            <a href="/moto/{{ $m->id }}/edit" class="btn btn-sm btn-warning">Editar</a>
                            <a href="/moto/{{ $m->id }}" class="btn btn-sm btn-info">Consultar</a>

                            <form action="/moto/{{ $m->id }}" method="post">
                                @csrf
                                @method('DELETE')

                                <button type="submit" class="btn btn-sm btn-danger"
                                    onclick="return confirm('Tem certeza que deseja excluir este cliente?')">
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
