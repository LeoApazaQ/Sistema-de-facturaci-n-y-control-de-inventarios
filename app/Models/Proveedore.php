<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Proveedore
 *
 * @property $id
 * @property $documento
 * @property $cod_tipo_documento
 * @property $nombre
 * @property $apellido
 * @property $nombre_comercial
 * @property $direccion
 * @property $cod_ciudad
 * @property $created_at
 * @property $updated_at
 *
 * @property Articulo[] $articulos
 * @property Ciudade $ciudade
 * @property TipoDocumento $tipoDocumento
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Proveedore extends Model
{
    
    static $rules = [
		'documento' => 'required',
		'cod_tipo_documento' => 'required',
		'nombre' => 'required',
		'apellido' => 'required',
		'nombre_comercial' => 'required',
		'direccion' => 'required',
		'cod_ciudad' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['documento','cod_tipo_documento','nombre','apellido','nombre_comercial','direccion','cod_ciudad'];


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
    public function articulos()
    {
        return $this->hasMany('App\Models\Articulo', 'cod_proveedor', 'id');
    }
        
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function tipoDocumento()
    {
        return $this->hasOne('App\Models\TipoDocumento', 'id', 'cod_tipo_documento');
    }
    

}
