<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Producto
 *
 * @property $id
 * @property $id_producto
 * @property $nombre
 * @property $descripcion
 * @property $unidades
 * @property $precio_unitario
 * @property $categoria
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Producto extends Model
{
    
    static $rules = [
		'id_producto' => 'required',
		'nombre' => 'required',
		'descripcion' => 'required',
		'unidades' => 'required',
		'precio_unitario' => 'required',
		'categoria' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_producto','nombre','descripcion','unidades','precio_unitario','categoria'];



}
