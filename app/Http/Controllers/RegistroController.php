<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\usuario;
use Illuminate\Support\Facades\Hash;


class RegistroController extends Controller
{
    public function mostrarFormulario()
    {
        return view('registro');
    }

    public function registrar(Request $request)
    {
        // Valida los datos del formulario
        $request->validate([
            'nick' => 'required|string|unique:usuarios,nick',
            'email' => 'required|email|unique:usuarios,email',
            'nombre' => 'required|string',
            'apellidos' => 'required|string',
            'dni' => 'required|string',
            'fecha_nacimiento' => 'required|date',
            'contrasena' => 'required|string|min:6',
            'rol' => 'required|in:usuario normal,administrador',
        ]);

        // Crea un nuevo usuario
        Usuario::create([
            'nick' => $request->input('nick'),
            'email' => $request->input('email'),
            'nombre' => $request->input('nombre'),
            'apellidos' => $request->input('apellidos'),
            'dni' => $request->input('dni'),
            'fecha_nacimiento' => $request->input('fecha_nacimiento'),
            'contrasena' => $request->input('contrasena'), 
            'rol' => $request->input('rol'),
        ]);

        // Redirecciona a la página de inicio de sesión o a donde desees
        session()->flash('mensaje', 'Registro realizado con éxito');
        return redirect('/inicio-sesion')->with('success', 'Registro exitoso');
    }
}
