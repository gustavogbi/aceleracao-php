<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Documento extends Model
{
    use HasFactory;
    
    protected $fillable = ['titulo', 'tamanho', 'assinaturas', 'assinatura_do_responsavel', 'qtd_paginas'];
}
