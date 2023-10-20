<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoDocumento extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'Descripcion'
    ];

    public function proveedores()
    {
        return $this->hasMany(Proveedor::class);
    }
    public function clientes()
    {
        return $this->hasMany(Cliente::class);
    }
}
