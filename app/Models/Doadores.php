<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doadores extends Model
{
    protected $fillable = [
        'nome',
        'email',
        'cpf',
        'telefone',
        'dt_nascimento',
        'dt_cadastro',
        'intervalo_doacao',
        'vl_doacao',
        'forma_pagamento',
        'endereco'
    ];
}
