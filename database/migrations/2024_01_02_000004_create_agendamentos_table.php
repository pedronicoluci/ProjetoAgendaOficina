<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('agendamentos', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('moto_id');
            $table->unsignedInteger('servico_id');
            $table->date('data');
            $table->time('horario');
            $table->string('status', 20);

            $table->foreign('moto_id')
                ->references('id')->on('motos')
                ->onDelete('cascade');

            $table->foreign('servico_id')
                ->references('id')->on('servicos')
                ->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('agendamentos');
    }
};
