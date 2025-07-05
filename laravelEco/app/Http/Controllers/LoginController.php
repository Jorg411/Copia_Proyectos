<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('general.iniciarSesion.iniciar');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
        
            $usuario = Auth::user();
        
            if ($usuario->rol === 'admin') {
                return redirect()->route('administrador.panel');
            } elseif ($usuario->rol === 'cliente') {
                return redirect()->route('home');
            }
        
            // Si el rol no es válido
            Auth::logout();
            return redirect()->route('login')->withErrors([
                'rol' => 'Rol no autorizado.',
            ]);
        }

        return back()->withErrors([
            'email' => 'Las credenciales proporcionadas no coinciden con nuestros registros.',
        ])->onlyInput('email');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        
        return redirect()->route('home')->with('success', 'Has cerrado sesión exitosamente.');
    }
}