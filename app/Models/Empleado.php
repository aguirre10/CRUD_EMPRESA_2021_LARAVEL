<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Empleado
 *
 * @property $id
 * @property $codigo
 * @property $nombres
 * @property $apellidos
 * @property $direccion
 * @property $telefono
 * @property $fecha_nacimiento
 * @property $id_puesto
 * @property $created_at
 * @property $updated_at
 *
 * @property Puesto $puesto
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Empleado extends Model
{
    
    static $rules = [
		'codigo' => 'required',
		'nombres' => 'required',
		'apellidos' => 'required',
		'direccion' => 'required',
		'telefono' => 'required',
		'fecha_nacimiento' => 'required',
		'id_puesto' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['codigo','nombres','apellidos','direccion','telefono','fecha_nacimiento','id_puesto'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function puesto()
    {
        return $this->hasOne('App\Models\Puesto', 'id', 'id_puesto');
    }
    

}
