<!DOCTYPE html>
<html>
<head>
    <title>Crear Usuario</title>
</head>
<body>
    <h1>Crear Nuevo Usuario</h1>
    <form method="POST" action="{{ route('usuarios.store') }}">
        @csrf
        <label>Nombre:</label>
        <input type="text" name="name" required>

        <label>Apellido:</label>
        <input type="text" name="apellido" required>

        <label>Email:</label>
        <input type="email" name="email" required>

        <label>Edad:</label>
        <input type="number" name="edad" required>

        <label>Teléfono:</label>
        <input type="text" name="telefono" required>

        <label>Género:</label>
        <select name="genero">
            <option value="Masculino">Masculino</option>
            <option value="Femenino">Femenino</option>
            <option value="Otro">Otro</option>
        </select>

        <label>Rol:</label>
        <select name="rol">
            <option value="admin">Administrador</option>
            <option value="cliente">Cliente</option>
        </select>

        <label>Contraseña:</label>
        <input type="password" name="password" required>

        <label>Confirmar Contraseña:</label>
        <input type="password" name="password_confirmation" required>

        <button type="submit">Crear Usuario</button>
    </form>
</body>
</html>
