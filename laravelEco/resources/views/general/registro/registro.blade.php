@extends('layouts.app')

@section('content')
<div class="container mt-3">
    <a href="/iniciar" class="btn btn-link text-decoration-none" aria-label="Volver al inicio">
        <i class="bi bi-house-fill fs-4 text-success"></i>
    </a>
</div>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-10 col-sm-6 col-md-4 border border-info rounded-3 p-3 mt-4 bg-light">
            <h3 class="text-center mb-3" style="font-size: 1.2rem;">Formulario</h3>

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

            <!-- <form action="{{ route('usuarios.store') }}" method="POST"> -->
            <form method="POST" action="{{ route('usuarios.store') }}">
                @csrf

                
                <!-- Nombre -->
                <div class="form-group mb-2">
                    <label class="form-label" for="nombre">Nombre</label>
                    <input class="form-control form-control-sm" type="text" name="nombre" id="nombre"
                        value="{{ old('nombre') }}" placeholder="Tu nombre">
                    <div id="nombre-error" class="text-danger small"></div>  <!-- Mensaje de error -->
                    @error('nombre') <div class="text-danger small">{{ $message }}</div> @enderror
                </div>

                <!-- Apellido -->
                <div class="form-group mb-2">
                    <label class="form-label" for="apellido">Apellido</label>
                    <input class="form-control form-control-sm" type="text" name="apellido" id="apellido"
                        value="{{ old('apellido') }}" placeholder="Tu apellido">
                    <div id="apellido-error" class="text-danger small"></div> <!-- Mensaje de error -->
                    @error('apellido') <div class="text-danger small">{{ $message }}</div> @enderror
                </div>

                <!-- Correo -->
                <div class="form-group mb-2">
                    <label class="form-label" for="email">Correo Electrónico</label>
                    <input class="form-control form-control-sm" type="email" name="email" id="email"
                        value="{{ old('email') }}" placeholder="correo@gmail.com">
                    <div id="email-error" class="text-danger small"></div> <!-- Mensaje de error -->
                    @error('email') <div class="text-danger small">{{ $message }}</div> @enderror
                </div>

                <!-- Edad -->
                <div class="form-group mb-2">
                    <label class="form-label" for="edad">Edad</label>
                    <input class="form-control form-control-sm" type="text" name="edad" id="edad"
                        value="{{ old('edad') }}" placeholder="Ingresa tu edad">
                    <div id="edad-error" class="text-danger small"></div> <!-- Mensaje de error -->
                    @error('edad') <div class="text-danger small">{{ $message }}</div> @enderror
                </div>

                <!-- Teléfono -->
                <div class="form-group mb-2">
                    <label class="form-label" for="telefono">Teléfono</label>
                    <input class="form-control form-control-sm" type="text" name="telefono" id="telefono"
                        value="{{ old('telefono') }}" placeholder="Ingresa tu número de teléfono" maxlength="10"
                        oninput="this.value = this.value.replace(/[^0-9]/g, '')">
                    <div id="telefono-error" class="text-danger small"></div> <!-- Mensaje de error -->
                    @error('telefono') <div class="text-danger small">{{ $message }}</div> @enderror
                </div>

                <!-- Género -->
                <div class="input-group mb-2">
                    <label class="input-group-text" for="genero">Género</label>
                    <select class="form-select form-select-sm" name="genero" id="genero">
                        <option value="" selected>Seleccionar</option>
                        <option value="Masculino" {{ old('genero') == 'Masculino' ? 'selected' : '' }}>Masculino</option>
                        <option value="Femenino" {{ old('genero') == 'Femenino' ? 'selected' : '' }}>Femenino</option>
                        <option value="Otro" {{ old('genero') == 'Otro' ? 'selected' : '' }}>Otro</option>
                    </select>
                    @error('genero') <div class="text-danger small">{{ $message }}</div> @enderror
                </div>

                <!-- Contraseña -->
                <div class="form-group mb-2">
                    <label class="form-label" for="contraseña">Contraseña</label>
                    <input class="form-control form-control-sm" type="password" name="password" id="password"
                        placeholder="Ingresa una contraseña">
                    <div id="password-error" class="text-danger small"></div> <!-- Mensaje de error -->
                    @error('contraseña') <div class="text-danger small">{{ $message }}</div> @enderror
                </div>

                <!-- Confirmar Contraseña -->
                <div class="form-group mb-2">
                    <label class="form-label" for="contraseña_confirmation">Confirmar Contraseña</label>
                    <input class="form-control form-control-sm" type="password" name="password_confirmation"
                        id="password_confirmation" placeholder="Confirma tu contraseña">
                    <div id="confirm-password-error" class="text-danger small"></div> <!-- Mensaje de error -->
                </div>

                <!-- Roles -->
                <div class="input-group mb-2">
                    <label class="input-group-text" for="rol">Rol</label>
                    <select class="form-select form-select-sm" name="rol" id="rol">
                        <option value="" selected>Seleccionar</option>
                        <option value="admin" {{ old('rol') == 'admin' ? 'selected' : '' }}>Administrador</option>
                        <option value="cliente" {{ old('rol') == 'cliente' ? 'selected' : '' }}>Cliente</option>
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
<script src="{{asset('js/validaciones.js')}}"></script>
@endsection
