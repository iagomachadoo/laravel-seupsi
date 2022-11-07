<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConteudoPerfil extends Model
{
    use HasFactory;
    protected $filelabel = [
        'titulo',
        'resumo',
        'conteudo',
        'img',
    ];
}
