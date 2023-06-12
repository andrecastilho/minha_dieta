<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Respostas extends Model
{
    protected $fillable = [
        'nome',
        'p1',
        'sexo',
        'tokenable_id'
    ];
}
