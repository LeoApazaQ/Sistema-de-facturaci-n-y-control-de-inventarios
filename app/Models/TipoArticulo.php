<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoArticulo extends Model
{
    use HasFactory;

    protected $fillable = [
        'Descripcion_articulo'
    ];

    public function articulos()
    {
        return $this->hasMany(articulo::class);
    }
}
