<!-- resources/views/layouts/admin.blade.php -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Panel Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .navbar-custom {
            background-color: #f2f5f2;
            border-bottom: 2px solid #0a5c2c;
        }
        .navbar-brand img {
            height: 40px;
        }
        .nav-link {
            color: #333 !important;
            margin-left: 15px;
        }
        footer {
            background-color: #f2f5f2;
            border-top: 1px solid #ccc;
            padding: 15px 0;
            margin-top: 40px;
            text-align: center;
            font-size: 0.9rem;
            color: #777;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light navbar-custom px-4">
        <a class="navbar-brand d-flex align-items-center" href="{{ route('administrador.panel') }}">
            <img src="{{ asset('img/logo-removebg-preview.png') }}" alt="Logo Eco Friendly">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('administrador.panel') }}">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('usuarios.inicio') }}">Administración de Usuarios</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Gestión de Productos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Pedidos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Configuraciones</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container mt-4">
        @yield('content')
    </div>

    <footer>
        <div class="container">
            Panel de Administración | Acceso restringido para personal autorizado <br>
            &copy; {{ date('Y') }} EcoFriendly Store. Todos los derechos reservados.
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
