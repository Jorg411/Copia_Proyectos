<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class login extends Controller
{
    //


    public function login(Request $request)
    {
        $email = $request->input('email');
        $password = $request->input('contraseña');

        if (!$email || !$password) {
            return back()->withErrors(['message' => 'Email y contraseña requeridos']);
        }

        $user = DB::table('usuarios')->where('email', $email)->first();

        if (!$user) {
            $user = DB::table('administrador')->where('email', $email)->first();
        }

        if ($user && $user->contraseña === $password) {
            if ($user->rol === 'admin') {
                return redirect('/vista/administrador/index.html');
            } else {
                return redirect('/vista/cliente/index/index.html');
            }
        } else {
            return back()->withErrors(['message' => 'Credenciales incorrectas']);
        }
    }
}
