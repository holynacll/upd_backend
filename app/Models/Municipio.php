<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Model;

class Municipio extends Model
{
    use HasFactory;

    protected $table = 'municipios';
    protected $fillable = [
        'nome',
        'uf_id'
    ];
    public $timestamps = false;

    public function unidade_federativa(): HasOne
    {
        return $this->hasOne(UnidadeFederativa::class, 'id', 'uf_id');
    }
}
