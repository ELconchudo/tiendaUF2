<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Usuario
 *
 * @property $id
 * @property $nick
 * @property $email
 * @property $nombre
 * @property $apellidos
 * @property $dni
 * @property $fecha_nacimiento
 * @property $contrasena
 * @property $rol
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Usuario extends Model
{
    
    static $rules = [
		'nick' => 'required',
		'email' => 'required',
		'nombre' => 'required',
		'apellidos' => 'required',
		'dni' => 'required',
		'fecha_nacimiento' => 'required',
		'contrasena' => 'required',
		'rol' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nick','email','nombre','apellidos','dni','fecha_nacimiento','contrasena','rol'];



}
