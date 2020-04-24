<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Libro extends Model
{
    protected $fillable = [
        'titulo', 
        'autor',
        'fecha_publicacion',
        'editorial',
        'resumen',
        'descripcion',
        'precio',
        'genero',
        'palabras_clave',
        'imagen'
    ];
}
