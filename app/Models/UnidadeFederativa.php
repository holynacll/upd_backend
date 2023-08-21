<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UnidadeFederativa extends Model
{
    use HasFactory;

    protected $table = 'unidades_federativas';
    protected $fillable = [
        'sigla',
        'nome'
    ];
    public $timestamps = false;
}
