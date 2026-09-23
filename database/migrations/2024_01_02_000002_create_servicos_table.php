<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('servicos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome', 100);
            $table->decimal('preco', 10, 2);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('servicos');
    }
};
