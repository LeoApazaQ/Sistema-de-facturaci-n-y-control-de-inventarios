<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ciudad extends Model
{
    use HasFactory;
    
    protected $table = 'ciudades';

    protected $fillable = [
        'Nombre_ciudad'
    ];

    //conexiones

    public function proveedores()
    {
        return $this->hasMany(Proveedor::class);
    }

    public function clientes()
    {
        return $this->hasMany(Cliente::class);
    }



}
