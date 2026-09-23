<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AgendamentoController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\MotoController;
use App\Http\Controllers\ServicoController;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::resource('cliente', ClienteController::class);

Route::resource('servico', ServicoController::class);

Route::resource('agendamento', AgendamentoController::class);

Route::resource('moto', MotoController::class);

