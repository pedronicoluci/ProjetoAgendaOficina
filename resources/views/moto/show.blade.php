@extends('layouts.app')
 
@section('title', 'Detalhes da Moto')
 
@section('content')
 
<div class="page-header">
    <h1 class="h3 mb-0"><i class="fa-solid fa-motorcycle text-success"></i> Detalhes da Moto</h1>
    <a href="{{ route('moto.index') }}" class="btn btn-outline-secondary">
        <i class="bi bi-arrow-left"></i> Voltar
    </a>
</div>
 
<div class="card page-card">
    <div class="card-body">

            
        <div class="mb-3">
            <label class="form-label">ID</label>
            <input type="text" class="form-control" value="{{ $moto->id }}" disabled>
        </div>
        <div class="mb-3">
            <label class="form-label">Marca</label>
            <input class="form-control"value="{{ $moto->marca }}" disabled>
        </div>
        <div class="mb-3">
            <label class="form-label">Modelo</label>
            <input class="form-control" value="{{ $moto->modelo }}" disabled>
        </div>
        <div class="mb-3">
            <label class="form-label">Placa</label>
            <input class="form-control" value="{{ $moto->placa }}" disabled>
        </div>
        <div class="mb-3">
            <label class="form-label">Cliente</label>
            <input class="form-control" value="{{ $moto->cliente->nome }}" disabled>
            </select>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
    </div>
</div>
 
@endsection
