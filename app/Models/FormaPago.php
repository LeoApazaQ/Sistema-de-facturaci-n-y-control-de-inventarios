<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class FormaPago
 *
 * @property $id
 * @property $descripcion_forma_pago
 * @property $created_at
 * @property $updated_at
 *
 * @property Factura[] $facturas
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class FormaPago extends Model
{
    
    static $rules = [
		'descripcion_forma_pago' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['descripcion_forma_pago'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function facturas()
    {
        return $this->hasMany('App\Models\Factura', 'cod_forma_pago', 'id');
    }
    

}
