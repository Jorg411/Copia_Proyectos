@extends('layouts.crud')

@section('content')
<div class="container" class="bg-dark text-white">
    <h2>Lista de usuarios</h2>
    <a href="{{ route('usuarios.inicio') }}" class="btn btn-success mb-2">Crear usuario</a>
    


    <table class="table table-bordered text-center align-middle ">
    <thead class="">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Correo</th>
            <th>Edad</th>
            <th>Teléfono</th>
            <th>Género</th>
            <th>Rol</th>
            <th>Acciones</th> <!-- Esta es la última columna -->
        </tr>
    </thead>
    <tbody>
        @foreach ($usuarios as $usuario)
        <tr>
            <td>{{ $usuario->id }}</td>
            <td>{{ $usuario->nombre }}</td>
            <td>{{ $usuario->apellido }}</td>
            <td>{{ $usuario->email }}</td>
            <td>{{ $usuario->edad }}</td>
            <td>{{ $usuario->telefono }}</td>
            <td>{{ $usuario->genero }}</td>
            <td>{{ $usuario->rol }}</td>
            <td class="text-nowrap">
                <a href="{{ route('usuarios.edit', $usuario->id) }}" class="btn btn-warning btn-sm me-2">Editar</a>
                <form action="{{ route('usuarios.destroy', $usuario->id) }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm"
                        onclick="return confirm('¿Eliminar usuario?')">
                        Eliminar
                    </button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

</div>
@endsection
