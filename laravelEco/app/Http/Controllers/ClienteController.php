<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Pedido;


class ClienteController extends Controller
{
    public function index()
    {
        return view('cliente.inicio.home');
    }


public function perfil()
{
    $usuario = auth()->user();  
    $pedidos = $usuario->pedidos ?? []; // Asegúrate de que existe la relación

    return view('cliente.perfil.perfil', compact('usuario', 'pedidos'));
}

public function actualizarPerfil(Request $request)
{
    $usuario = auth()->user();

    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255|unique:users,email,' . $usuario->id,
    ]);

    $usuario->name = $request->name;
    $usuario->email = $request->email;
    $usuario->save();

    return redirect()->route('cliente.perfil')->with('success', 'Perfil actualizado correctamente.');
}
}