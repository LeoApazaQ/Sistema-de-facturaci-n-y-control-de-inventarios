<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Proveedor extends Model
{
    use HasFactory;

    protected $fillable = [
        'Cod_tipo_documento',
        'Nombre',
        'Apellido',
        'Nombre_comercial',
        'Direccion',
        'Cod_ciudad',
        'Telefono',
    ];

    //conexiones

    public function ciudad()
    {
        return $this->belongsTo(Ciudad::class);
    }

    public function tipo_documento()
    {
        return $this->belongsTo(Tipo_Documento::class);
    }

    public function articulos()
    {
        return $this->hasMany(Articulo::class);
    }
}
