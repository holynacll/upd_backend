<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    protected $table = 'clientes';
    protected $fillable = [
        'nome',
        'cpf',
        'data_nasc',
        'sexo',
        'endereco',
        'mun_id'
    ];

    public function municipio(): HasOne
    {
        return $this->hasOne(Municipio::class, 'id', 'mun_id');
    }
}
