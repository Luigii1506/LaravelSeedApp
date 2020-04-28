<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use ChristianKuri\LaravelFavorite\Traits\Favoriteable;

class Libro extends Model
{
    use Favoriteable;
    
    protected $fillable = [
        'titulo', 
        'autor',
        'fecha_publicacion',
        'editorial',
        'resumen',
        'paginas',
        'precio',
        'genero',
        'imagen'
    ];
}
