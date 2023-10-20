<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Cliente
 *
 * @property $id
 * @property $documento
 * @property $cod_tipo_documento
 * @property $nombres
 * @property $apellidos
 * @property $direccion
 * @property $cod_ciudad
 * @property $telefono
 * @property $created_at
 * @property $updated_at
 *
 * @property Ciudade $ciudade
 * @property Factura[] $facturas
 * @property TipoDocumento $tipoDocumento
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Cliente extends Model
{
    
    static $rules = [
		'documento' => 'required',
		'cod_tipo_documento' => 'required',
		'nombres' => 'required',
		'apellidos' => 'required',
		'direccion' => 'required',
		'cod_ciudad' => 'required',
		'telefono' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['documento','cod_tipo_documento','nombres','apellidos','direccion','cod_ciudad','telefono'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function ciudad()
    {
        return $this->hasOne('App\Models\Ciudad', 'id', 'cod_ciudad');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function facturas()
    {
        return $this->hasMany('App\Models\Factura', 'cod_cliente', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function tipoDocumento()
    {
        return $this->hasOne('App\Models\TipoDocumento', 'id', 'cod_tipo_documento');
    }
    

}
