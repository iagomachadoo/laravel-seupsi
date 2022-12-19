<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tema extends Model
{
    use HasFactory;
    public $fillable = [
        'nome',
        'slug',
        'created_at',
        'update_at'
    ];

    public function temaTemConteudos()
    {
        return $this->hasMany("App\Models\Conteudo", "tema_id");
    }
}
