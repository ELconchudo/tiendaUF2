<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class InicioSesionController extends Controller
{
    public function mostrarFormulario()
    {
        return view('inicioSesion');
    }

    public function iniciarSesion(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credenciales = [
            "email" => $request->email,
            "password" => $request->password,
        ];

        $remember = ($request->has('remember') ? true : false);

        if (Auth::attempt($credenciales, $remember)) {
            //la autenticación fue exitosa
            $request->session()->regenerate();

            return redirect('/mostrar');
        }

        //la autenticación falló
        return back()->withErrors(['email' => 'Credenciales incorrectas'])->withInput();
    }

    public function cerrarSesion()
    {
        Auth::logout();

        return redirect('/');
    }
}
