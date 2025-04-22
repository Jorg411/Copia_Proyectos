@csrf

<div class="mb-3">
    <label for="nombre" class="form-label text-white">Nombre</label>
    <input class="form-control bg-dark text-white border-white" type="text" name="nombre" id="nombre" value="{{ old('nombre', $usuario->nombre ?? '') }}">
</div>

<div class="mb-3">
    <label for="apellido" class="form-label text-white">Apellido</label>
    <input class="form-control bg-dark text-white border-white" type="text" name="apellido" id="apellido" value="{{ old('apellido', $usuario->apellido ?? '') }}">
</div>

<div class="mb-3">
    <label for="email" class="form-label text-white">Correo</label>
    <input class="form-control bg-dark text-white border-white" type="email" name="email" id="email" value="{{ old('email', $usuario->email ?? '') }}">
</div>

<div class="mb-3">
    <label for="edad" class="form-label text-white">Edad</label>
    <input class="form-control bg-dark text-white border-white" type="number" name="edad" id="edad" value="{{ old('edad', $usuario->edad ?? '') }}">
</div>

<div class="mb-3">
    <label for="telefono" class="form-label text-white">Teléfono</label>
    <input class="form-control bg-dark text-white border-white" type="text" name="telefono" id="telefono" value="{{ old('telefono', $usuario->telefono ?? '') }}">
</div>

<div class="mb-3">
    <label for="genero" class="form-label text-white">Género</label>
    <select class="form-control bg-dark text-white border-white" name="genero" id="genero">
        <option value="Masculino" {{ old('genero', $usuario->genero ?? '') == 'Masculino' ? 'selected' : '' }}>Masculino</option>
        <option value="Femenino" {{ old('genero', $usuario->genero ?? '') == 'Femenino' ? 'selected' : '' }}>Femenino</option>
        <option value="Otro" {{ old('genero', $usuario->genero ?? '') == 'Otro' ? 'selected' : '' }}>Otro</option>
    </select>
</div>

<div class="mb-3">
    <label for="rol" class="form-label text-white">Rol</label>
    <input class="form-control bg-dark text-white border-white" type="text" name="rol" id="rol" value="{{ old('rol', $usuario->rol ?? '') }}">
</div>

<button class="btn btn-success">Guardar</button>
<a href="{{ route('usuarios.inicio') }}" class="btn btn-secondary">Cancelar</a>
