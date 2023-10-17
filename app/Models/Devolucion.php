<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Devolucion extends Model
{
    use HasFactory;

    protected $fillable = [
        'Cod_detalle_factura',
        'Motivo',
        'Fecha_devolucion',
        'Cantidad',
    ];

    public function detalle_factura()
    {
        return $this->belongsTo(Detalle_Factura::class);
    }
}
