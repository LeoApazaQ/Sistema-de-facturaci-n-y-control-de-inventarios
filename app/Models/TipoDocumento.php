<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TipoDocumento
 *
 * @property $id
 * @property $descripcion
 * @property $created_at
 * @property $updated_at
 *
 * @property Cliente[] $clientes
 * @property Proveedore[] $proveedores
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class TipoDocumento extends Model
{
    
    static $rules = [
		'descripcion' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['descripcion'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function clientes()
    {
        return $this->hasMany('App\Models\Cliente', 'cod_tipo_documento', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function proveedores()
    {
        return $this->hasMany('App\Models\Proveedor', 'cod_tipo_documento', 'id');
    }
    

}
