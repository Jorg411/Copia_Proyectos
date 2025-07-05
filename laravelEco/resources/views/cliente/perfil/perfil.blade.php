@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Mi Perfil</h2>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('cliente.perfil.actualizar') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Nombre:</label>
            <input type="text" class="form-control" name="name" value="{{ old('name', $usuario->name) }}" required>
        </div>

        <div class="form-group">
            <label for="email">Correo:</label>
            <input type="email" class="form-control" name="email" value="{{ old('email', $usuario->email) }}" required>
        </div>

        <button type="submit" class="btn btn-primary mt-2">Actualizar</button>
    </form>

    <hr>

    <h3>Mis Pedidos</h3>

    @if(count($pedidos) > 0)
        <ul>
            @foreach($pedidos as $pedido)
                <li>
                    <strong>#{{ $pedido->id }}</strong> - Estado: {{ $pedido->estado }} - Fecha: {{ $pedido->created_at->format('d/m/Y') }}
                </li>
            @endforeach
        </ul>
    @else
        <p>No tienes pedidos aún.</p>
    @endif
</div>
@endsection
