<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Usuario; 
use Illuminate\Validation\Rule;

class UsuarioController extends Controller
{
    public function create()
    {
        return view('usuarios.create'); 
    }

    public function store(Request $request)
    {
        
        $request->validate([
        
            'nombre' => 'required|string|max:50|regex:/^[a-zA-Z\s]+$/', // Solo letras y espacios
            'apellido' => 'required|string|max:50|regex:/^[a-zA-Z\s]+$/', // Solo letras y espacios
            'edad' => 'required|integer|min:1|max:110', // Solo enteros
            'telefono' => 'nullable|string|min:10|max:15|regex:/^[0-9\s\-\+]+$/', // Solo números, espacios, guiones y signos +
            'genero' => ['required', Rule::in(['Masculino', 'Femenino', 'Otro'])],
            'email' => 'required|email|unique:usuarios,email',
            'password' => 'required|string|min:6|confirmed',
            'rol' => ['required', Rule::in(['admin', 'cliente'])],
        
            
        ]);

        Usuario::create([
            'nombre' => $request->nombre,
            'apellido' => $request->apellido,
            'edad' => $request->edad,
            'telefono' => $request->telefono,
            'genero' => $request->genero,
            'email' => $request->email, 
            'password' => Hash::make($request->password),
            'rol' => $request->rol,
        ]);
        

        return redirect()->back()->with('success', 'Usuario registrado correctamente.');
    } 
}
