<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'EcoFriendly')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- Bootstrap 5 --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    {{-- Bootstrap Icons --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

    {{-- SweetAlert2 --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    {{-- Estilo adicional opcional --}}
    <style>
        body {
            background: #f5f9f6;
            font-family: 'Segoe UI', sans-serif;
        }
        .navbar {
            background-color: #198754 !important;
        }
        .navbar-brand {
            color: white !important;
            font-weight: bold;
        }
        .navbar-brand:hover {
            text-decoration: underline;
        }
    </style>

    @stack('styles')
</head>
<body>

    {{-- Navbar --}}
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home') }}">
                <i class="bi bi-tree-fill me-2"></i>EcoFriendly
            </a>
        </div>
    </nav>

    {{-- Contenido principal --}}
    <main class="container py-4">
        @yield('content')
    </main>

    {{-- Scripts de Bootstrap --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    @stack('scripts')
</body>
</html>
