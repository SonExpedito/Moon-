<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Filmes extends Model
{
    protected $fillable = [
        'titulo',
        'image',
        'descricao',
        'favorito',
        'video'
    ];

    use HasFactory;
}
