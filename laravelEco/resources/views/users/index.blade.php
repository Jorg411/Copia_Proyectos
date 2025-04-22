<!DOCTYPE html>
<html>
<head>
    <title>Usuarios Registrados</title>
</head>
<body>
    <h1>Lista de Usuarios</h1>
    @if (session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif
    <table border="1">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Email</th>
                <th>Edad</th>
                <th>Teléfono</th>
                <th>Género</th>
                <th>Rol</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->nombre }}</td>
                    <td>{{ $user->apellido }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->edad }}</td>
                    <td>{{ $user->telefono }}</td>
                    <td>{{ $user->genero }}</td>
                    <td>{{ $user->rol }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('users.create') }}">Crear Nuevo Usuario</a>
</body>
</html>
