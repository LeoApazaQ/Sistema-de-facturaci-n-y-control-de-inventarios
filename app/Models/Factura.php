<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Factura extends Model
{
    use HasFactory;

    protected $fillable = [
        'Cod_cliente',
        'Nombre_empleado',
        'Fecha_facturacion',
        'Cod_forma_pago',
        'Total_factura',
        'IVA',
    ];

    public function forma_pago()
    {
        return $this->belongsTo(Forma_Pago::class);
    }

    public function cliente()
    {
        return $this->belongsTo(Cliente::class);
    }

    public function detalle_facturas()
    {
        return $this->hasMany(Detalle_Factura::class);
    }
}
