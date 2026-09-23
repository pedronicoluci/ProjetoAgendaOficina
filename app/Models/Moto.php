<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Moto extends Model
{
    protected $table = "motos";

    public $incrementing = true;

    public $timestamps = false;

    protected $fillable = [
        'cliente_id',
        'marca',
        'modelo',
        'placa'
    ];

    public function cliente(){
        return $this->belongsTo(Cliente::class, 'cliente_id');
    }
}