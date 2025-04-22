{{-- resources/views/layouts/crud.blade.php --}}
<!DOCTYPE html>
<html lang="es" data-bs-theme="light">

<head>
<!-- <style>
    body[data-theme="dark"] {
        background-color: #121212;
        color: #ffffff;
    }

    body[data-theme="light"] {
        background-color: #ffffff;
        color: #000000;
    }

    .navbar.bg-success {
        transition: background-color 0.3s ease;
    }

    body[data-theme="dark"] .navbar {
        /* background-color: #1e1e1e !important; */
        background-color:rgb(8, 98, 51) !important;
    }

    body[data-theme="light"] .navbar {
        background-color:rgb(8, 98, 51) !important;
    }

    body[data-theme="dark"] .navbar-brand {
        color: #ffffff !important;
    }

    body[data-theme="light"] .navbar-brand {
        color: #000000 !important;
    }
</style> -->

    <meta charset="UTF-8">
    <title>@yield('title', 'Usuarios')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- Bootstrap 5 CDN --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    {{-- SweetAlert2 --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-success bg-success mb-4 justify-content-center">
    <a class="navbar-brand text-dark" href="#">Usuarios</a>
    <!-- <button id="theme-toggle" class="btn btn-outline-light ms-2">
    <i id="theme-icon" class="bi"></i>
</button> -->

</nav>


    <main class="container">
        @yield('content')
    </main>
</body>
<!-- <script src="{{asset('js/temaPag.js')}}"></script> -->
</html>
