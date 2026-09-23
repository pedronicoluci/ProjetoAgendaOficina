@extends('layouts.app')
 
@section('title', 'Novo Agendamento')
 
@section('content')
 
<div class="page-header">
    <h1 class="h3 mb-0"><i class="bi bi-calendar2-check-fill text-danger"></i> Novo Agendamento</h1>
    <a href="{{ route('agendamento.index') }}" class="btn btn-outline-secondary">
        <i class="bi bi-arrow-left"></i> Voltar
    </a>
</div>
 
<div class="card page-card">
    <div class="card-body">

        <form method="post" action="/agendamento">
            @CSRF
            <div class="mb-3">
                <label for="moto_id" class="form-label">Moto</label>
                <select id="moto_id" name="moto_id" class="form-select" required="">
                    @foreach ($motos as $m)
                        <option value="{{ $m->id }}">{{ $m->marca }} - {{ $m->modelo }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="servico_id" class="form-label">Serviço</label>
                <select id="servico_id" name="servico_id" class="form-select" required="">
                    @foreach ($servicos as $s)
                        <option value="{{ $s->id }}">{{ $s->nome }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="data" class="form-label">Data</label>
                <input type="date" id="data" name="data" class="form-control" required="">
            </div>
            <div class="mb-3">
                <label for="horario" class="form-label">Horario</label>
                <input type="time" id="horario" name="horario" class="form-control" required="">
            </div>
            <div class="mb-3">
                <label for="status" class="form-label">Status</label>
                <select id="status" name="status" class="form-select" required="">
                    @foreach ($statusOptions as $value => $label)
                        <option value="{{ $value }}" {{ old('status', 'agendado') == $value ? 'selected' : '' }}>
                            {{ $label }}
                        </option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </div>
</div>
 
@endsection
