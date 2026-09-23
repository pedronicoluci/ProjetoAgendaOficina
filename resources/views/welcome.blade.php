@extends('layouts.app')

@section('title', 'Início')

@section('content')

<div class="text-center mb-5">
    <h1 class="fw-bold"><i class="bi bi-wrench-adjustable-circle-fill"></i> Oficina de Motos</h1>
    <p class="lead text-muted mb-0">Gerencie clientes, motos, serviços e agendamentos de manutenção</p>
</div>

<div class="row g-4 justify-content-center">

    <div class="col-sm-6 col-lg-3">
        <div class="card card-cta h-100 text-center p-3">
            <div class="card-body d-flex flex-column align-items-center">
                <div class="icon-wrap bg-primary-subtle text-primary mb-3">
                    <i class="bi bi-people-fill"></i>
                </div>
                <h5 class="card-title">Clientes</h5>
                <p class="card-text text-muted small">Cadastro e histórico de clientes</p>
                <a href="{{ route('cliente.index') }}" class="btn btn-primary mt-auto w-100">
                    <i class="bi bi-arrow-right-circle"></i> Acessar
                </a>
            </div>
        </div>
    </div>

    <div class="col-sm-6 col-lg-3">
        <div class="card card-cta h-100 text-center p-3">
            <div class="card-body d-flex flex-column align-items-center">
                <div class="icon-wrap bg-success-subtle text-success mb-3">
                    <i class="fa-solid fa-motorcycle"></i>
                </div>
                <h5 class="card-title">Motos</h5>
                <p class="card-text text-muted small">Veículos cadastrados na oficina</p>
                <a href="{{ route('moto.index') }}" class="btn btn-success mt-auto w-100">
                    <i class="bi bi-arrow-right-circle"></i> Acessar
                </a>
            </div>
        </div>
    </div>

    <div class="col-sm-6 col-lg-3">
        <div class="card card-cta h-100 text-center p-3">
            <div class="card-body d-flex flex-column align-items-center">
                <div class="icon-wrap bg-warning-subtle text-warning mb-3">
                    <i class="bi bi-tools"></i>
                </div>
                <h5 class="card-title">Serviços</h5>
                <p class="card-text text-muted small">Tipos de manutenção oferecidos</p>
                <a href="{{ route('servico.index') }}" class="btn btn-warning mt-auto w-100 text-white">
                    <i class="bi bi-arrow-right-circle"></i> Acessar
                </a>
            </div>
        </div>
    </div>

    <div class="col-sm-6 col-lg-3">
        <div class="card card-cta h-100 text-center p-3">
            <div class="card-body d-flex flex-column align-items-center">
                <div class="icon-wrap bg-danger-subtle text-danger mb-3">
                    <i class="bi bi-calendar2-check-fill"></i>
                </div>
                <h5 class="card-title">Agendamentos</h5>
                <p class="card-text text-muted small">Manutenções agendadas</p>
                <a href="{{ route('agendamento.index') }}" class="btn btn-danger mt-auto w-100">
                    <i class="bi bi-arrow-right-circle"></i> Acessar
                </a>
            </div>
        </div>
    </div>

</div>

@endsection