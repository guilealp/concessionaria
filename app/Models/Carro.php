<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carro extends Model
{
    use HasFactory;

    protected $fillable =[
        'modelo',
        'ano',
        'marca',
        'cor',
        'peso',
        'potencia',
        'descricao',
        'preco'
    ];
}
