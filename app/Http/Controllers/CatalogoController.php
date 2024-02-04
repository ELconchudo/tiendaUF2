<?php

namespace App\Http\Controllers;
use App\Models\producto;

use Illuminate\Http\Request;

class CatalogoController extends Controller
{
    public function mostrarProductos(Request $request)
    {
        $productosQuery = Producto::query();

        if ($request->filled('categoria')) {
            $productosQuery->where('categoria', $request->categoria); //busca los productos por categoria
        }

        if ($request->has('ordenar')) {
            $direccion = $request->input('ordenar') === 'asc' ? 'asc' : 'desc'; //condicion para ordenar los productos en funcion del precio
            $productosQuery->orderBy('precio_unitario', $direccion);
        }

        $productos = $productosQuery->get();

        return view('mostrar', compact('productos'));
    }
}
