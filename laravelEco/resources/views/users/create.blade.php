<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Formulario Registro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
    <div class="container mt-3">
        <a href="{{ url('/') }}" class="btn btn-link text-decoration-none">
            <i class="bi bi-house-fill fs-4 text-success"></i>
        </a>
    </div>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-10 col-sm-6 col-md-4 border border-info rounded-3 p-3 mt-4 bg-light">
                <h3 class="text-center mb-3">Formulario</h3>

                @if(session('success'))
                    <script>
                        Swal.fire({
                            icon: 'success',
                            title: 'Registro exitoso',
                            text: '{{ session('success') }}',
                            confirmButtonText: 'Aceptar'
                        });
                    </script>
                @endif

                <form action="{{ route('usuarios.store') }}" method="POST">
                    @csrf
                    
                    <!-- Nombre -->
                    <div class="form-group mb-2">
                        <label class="form-label" for="nombre">Nombre</label>
                        <input class="form-control form-control-sm" type="text" name="nombre" id="nombre" value="{{ old('nombre') }}" placeholder="Tu nombre">
                        @error('nombre') <div class="text-danger small">{{ $message }}</div> @enderror
                    </div>

                    <!-- Apellido -->
                    <div class="form-group mb-2">
                        <label class="form-label" for="apellido">Apellido</label>
                        <input class="form-control form-control-sm" type="text" name="apellido" id="apellido" value="{{ old('apellido') }}" placeholder="Tu apellido">
                        @error('apellido') <div class="text-danger small">{{ $message }}</div> @enderror
                    </div>

                    <!-- Correo -->
                    <div class="form-group mb-2">
                        <label class="form-label" for="email">Correo Electrónico</label>
                        <input class="form-control form-control-sm" type="email" name="email" id="email" value="{{ old('email') }}" placeholder="correo@gmail.com">
                        @error('email') <div class="text-danger small">{{ $message }}</div> @enderror
                    </div>

                    <!-- Edad -->
                    <div class="form-group mb-2">
                        <label class="form-label" for="edad">Edad</label>
                        <input class="form-control form-control-sm" type="text" name="edad" id="edad" value="{{ old('edad') }}" placeholder="Ingresa tu edad">
                        @error('edad') <div class="text-danger small">{{ $message }}</div> @enderror
                    </div>

                    <!-- Teléfono -->
                    <div class="form-group mb-2">
                        <label class="form-label" for="telefono">Teléfono</label>
                        <input class="form-control form-control-sm" type="text" name="telefono" id="telefono" value="{{ old('telefono') }}" placeholder="Número de teléfono" maxlength="10">
                        @error('telefono') <div class="text-danger small">{{ $message }}</div> @enderror
                    </div>

                    <!-- Género -->
                    <div class="form-group mb-2">
                        <label class="form-label" for="genero">Género</label>
                        <select class="form-select form-select-sm" name="genero" id="genero">
                            <option value="" selected>Seleccionar</option>
                            <option value="mas" {{ old('genero') == 'mas' ? 'selected' : '' }}>Masculino</option>
                            <option value="fem" {{ old('genero') == 'fem' ? 'selected' : '' }}>Femenino</option>
                            <option value="otro" {{ old('genero') == 'otro' ? 'selected' : '' }}>Otro</option>
                        </select>
                        @error('genero') <div class="text-danger small">{{ $message }}</div> @enderror
                    </div>

                    <!-- Contraseña -->
                    <div class="form-group mb-2">
                        <label class="form-label" for="contraseña">Contraseña</label>
                        <input class="form-control form-control-sm" type="password" name="contraseña" id="contraseña" placeholder="Ingresa una contraseña">
                        @error('contraseña') <div class="text-danger small">{{ $message }}</div> @enderror
                    </div>

                    <!-- Confirmar Contraseña -->
                    <div class="form-group mb-2">
                        <label class="form-label" for="contraseña_confirmation">Confirmar Contraseña</label>
                        <input class="form-control form-control-sm" type="password" name="contraseña_confirmation" id="contraseña_confirmation" placeholder="Confirma tu contraseña">
                    </div>

                    <!-- Rol -->
                    <div class="form-group mb-2">
                        <label class="form-label" for="rol">Rol</label>
                        <select class="form-select form-select-sm" name="rol" id="rol">
                            <option value="" selected>Seleccionar</option>
                            <option value="adm" {{ old('rol') == 'adm' ? 'selected' : '' }}>Administrador</option>
                            <option value="cli" {{ old('rol') == 'cli' ? 'selected' : '' }}>Cliente</option>
                        </select>
                        @error('rol') <div class="text-danger small">{{ $message }}</div> @enderror
                    </div>

                    <!-- Botón Guardar -->
                    <div class="d-grid">
                        <button type="submit" class="btn btn-success btn-sm">Guardar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
