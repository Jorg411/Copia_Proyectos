<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Usuario;

class CrudUsuarioController extends Controller
{
    public function index(){
        $usuarios = Usuario::all();
        return view('usuarios.inicio', compact('usuarios'));
    }

    public function create(){
        return view('usuarios.create');
    }

    public function store(Request $request){
        $request->validate([
            'nombre' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:usuarios',
            'password' => 'required|string|min:8|confirmed',
        ]);

        Usuario::create($request->all());

        return redirect()->route('usuarios.inicio');
    }

    

    public function edit(Usuario $usuario){
        return view('usuarios.edit', compact('usuario'));
        // return view('usuarios.edit', compact('usuario'));
    }

    public function update(Usuario $usuario,Request $request ){
        // Validación y actualización de datos
    $usuario->update($request->all());

    return redirect()->route('usuarios.inicio')->with('success', 'Usuario actualizado correctamente.');
    }

    public function destroy(Usuario $usuario){
        // $usuario->delete();
        // return redirect()->route('usuarios.inicio');
        $usuario->delete();
        return redirect()->route('usuarios.inicio')->with('success', 'Usuario eliminado correctamente.');
    }
}
