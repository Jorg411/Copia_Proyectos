<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\login;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\CrudUsuarioController;

//crud
Route::get('/usuarios/inicio', [CrudUsuarioController::class, 'index'])->name('usuarios.inicio');
Route::get('/usuarios/{usuario}/edit', [CrudUsuarioController::class, 'edit'])->name('usuarios.edit');
Route::put('/usuarios/{usuario}', [CrudUsuarioController::class, 'update'])->name('usuarios.update');
Route::delete('usuarios/{usuario}', [CrudUsuarioController::class, 'destroy'])->name('usuarios.destroy');

//Rutas de inicio sesion autenticacion
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Para admin
Route::get('/admin/panel', [AdminController::class, 'index'])->name('administrador.panel');

// Para cliente
Route::get('/home', [ClienteController::class, 'index'])->name('home');

//crear usuario
Route::get('/usuarios/crear', [UsuarioController::class, 'create'])->name('usuarios.create');
Route::post('/usuarios', [UsuarioController::class, 'store'])->name('usuarios.store');

//general cliente
Route::get('/', function () {
    return view('welcome');
});

Route::get('/productos', function(){
    return view('cliente.productos.productos');
});
Route::get('/carrito', function(){
    return view('cliente.carrito.carrito');
});
Route::get('/iniciar', function(){
    return view('general.iniciarSesion.iniciar');
});
Route::get('/registro', function(){
    return view('general.registro.registro');
});

// Perfil del usuario autenticado
Route::get('/perfil', [ClienteController::class, 'perfil'])->name('cliente.perfil');
Route::post('/perfil/actualizar', [ClienteController::class, 'actualizarPerfil'])->name('cliente.perfil.actualizar');
