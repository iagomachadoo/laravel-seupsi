<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Conteudo extends Model
{
    use HasFactory;
    public $fillable = [
        'titulo',
        'slug',
        'autor',
        'conteudo',
        'tema_id',
        'created_at',
        'update_at'
    ];

}
