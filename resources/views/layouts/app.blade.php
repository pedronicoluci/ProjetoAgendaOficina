<!doctype html>
<html lang="pt-BR">

<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>@yield('title', 'Oficina de Motos')</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.5.1/css/all.min.css" rel="stylesheet">
<style>
    body {
        background-color: #f4f6f8;
    }
    .navbar-brand i {
        margin-right: .4rem;
    }
    .page-header {
        display: flex;
        align-items: center;
        justify-content: space-between;
        flex-wrap: wrap;
        gap: .75rem;
        margin-bottom: 1.5rem;
    }
    .page-card {
        border: none;
        border-radius: 1rem;
        box-shadow: 0 2px 8px rgba(0,0,0,0.06);
    }
    .card-cta {
        border: none;
        border-radius: 1rem;
        transition: transform 0.15s ease, box-shadow 0.15s ease;
        box-shadow: 0 2px 8px rgba(0,0,0,0.06);
    }
    .card-cta:hover {
        transform: translateY(-4px);
        box-shadow: 0 8px 20px rgba(0,0,0,0.1);
    }
    .card-cta .icon-wrap {
        width: 56px;
        height: 56px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.5rem;
    }
    .table-actions a, .table-actions button {
        margin-right: .25rem;
    }
</style>
@yield('styles')
</head>

<body>

<nav class="navbar navbar-dark bg-dark navbar-expand-lg mb-4">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">
            <i class="bi bi-wrench-adjustable-circle-fill"></i>Oficina de Motos
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navMenu">
            <ul class="navbar-nav ms-auto gap-lg-2">
                <li class="nav-item"><a class="nav-link" href="{{ route('cliente.index') }}"><i class="bi bi-people-fill"></i> Clientes</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('moto.index') }}"><i class="fa-solid fa-motorcycle"></i> Motos</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('servico.index') }}"><i class="bi bi-tools"></i> Serviços</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('agendamento.index') }}"><i class="bi bi-calendar2-check-fill"></i> Agendamentos</a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="container pb-5">

    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <i class="bi bi-check-circle-fill"></i> {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif

    @if ($errors->any())
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <i class="bi bi-exclamation-triangle-fill"></i> Corrija os erros abaixo:
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif

    @yield('content')

</div>

<footer class="text-center text-muted small pb-4">
    &copy; {{ date('Y') }} Oficina de Motos — Sistema de Gestão
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
@yield('scripts')
</body>

</html>