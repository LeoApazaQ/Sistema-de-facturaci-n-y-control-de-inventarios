<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Forma_Pago extends Model
{
    use HasFactory;

    protected $fillable = [
        'Descripcion_forma_pago'
    ];

    public function facturas()
    {
        return $this->hasMany(Factura::class);
    }
}
