<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Ciudade
 *
 * @property $id
 * @property $nombre_ciudad
 * @property $created_at
 * @property $updated_at
 *
 * @property Cliente[] $clientes
 * @property Proveedore[] $proveedores
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Ciudade extends Model
{
    
    static $rules = [
		'nombre_ciudad' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre_ciudad'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function clientes()
    {
        return $this->hasMany('App\Models\Cliente', 'cod_ciudad', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function proveedores()
    {
        return $this->hasMany('App\Models\Proveedore', 'cod_ciudad', 'id');
    }
    

}
