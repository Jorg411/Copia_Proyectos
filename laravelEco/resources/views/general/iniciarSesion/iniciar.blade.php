<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css">
</head>
<body class="bg-light">

    <!-- Botón para volver al inicio -->
    <div class="container mt-3">
        <a href="{{asset('home')}}" class="btn btn-link text-decoration-none" aria-label="Volver al inicio">
            <i class="bi bi-house-fill fs-3 text-success"></i> 
        </a>
    </div>

    <!-- Contenedor principal -->
    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        <div class="card shadow-lg p-4 w-100" style="max-width: 400px;">
            <h2 class="text-center text-success mb-4">Iniciar Sesión</h2>

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <!-- Correo Electrónico -->
                <div class="mb-3">
                    <label for="email" class="form-label">Correo Electrónico</label>
                    <input type="email" id="email" name="email" class="form-control" required>
                </div>
            
                <!-- Contraseña -->
                <div class="mb-3">
                    <label for="password" class="form-label">Contraseña</label>
                    <input type="password" id="password" name="password" class="form-control" required>
                </div>
            
                <!-- Botón de envío -->
                <div class="d-grid">
                    <button type="submit" class="btn btn-success">Iniciar Sesión</button>
                </div>
            </form>

            <!-- Enlace para registrarse -->
            <div class="mt-3 text-center">
                <p class="text-muted">¿No tienes una cuenta? <a href="{{asset('registro')}}" class="text-primary">Regístrate aquí</a></p>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
