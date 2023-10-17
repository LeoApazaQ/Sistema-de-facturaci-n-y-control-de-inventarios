<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detalle_Factura extends Model
{
    use HasFactory;

    //protected $primaryKey = 'Cod_factura';

    protected $fillable = [
        'Cod_factura',
        'Cod_articulo',
        'Cantidad',
        'Total'
    ];

    public function articulo()
    {
        return $this->belongsTo(Articulo::class);
    }

    public function factura()
    {
        return $this->belongsTo(Factura::class);
    }

    public function devolucion()
    {
        return $this->hasMany(Devolucion::class);
    }

}
