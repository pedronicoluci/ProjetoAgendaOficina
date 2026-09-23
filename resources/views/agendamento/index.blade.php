@extends('layouts.app')
 
@section('title', 'Agendamentos')
 
@section('content')
 
<div class="page-header">
    <h1 class="h3 mb-0"><i class="bi bi-calendar2-check-fill text-danger"></i> Agendamentos</h1>
    <div class="d-flex gap-2">
        <a href="{{ route('home') }}" class="btn btn-outline-secondary">
            <i class="bi bi-arrow-left"></i> Voltar
        </a>
        <a href="{{ route('agendamento.create') }}" class="btn btn-danger">
            <i class="bi bi-plus-circle"></i> Novo Agendamento
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
                    <th>Moto</th>
                    <th>Servico</th>
                    <th>Data</th>
                    <th>Horário</th>
                    <th>Status</th>
                    <th>Ações</th>
                </tr>
            </thead>

            <tbody>
                @foreach($agendamentos as $a)
                    <tr>
                        <td>{{ $a->id}}</td>
                        <td>{{ $a->moto->marca }} - {{ $a->moto->modelo }}</td>
                        <td>{{ $a->servico->nome }}</td>
                        <td>{{ $a->data }}</td>
                        <td>{{ $a->horario }}</td>
                        <td>{{ $a->status }}</td>
                        <td class="d-flex gap-2">
                            <a href="/agendamento/{{ $a->id }}/edit" class="btn btn-sm btn-warning">Editar</a>
                            <a href="/agendamento/{{ $a->id }}" class="btn btn-sm btn-info">Consultar</a>

                            <form action="/agendamento/{{ $a->id }}" method="post">
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
