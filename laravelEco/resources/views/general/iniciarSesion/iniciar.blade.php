<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{ asset('css/fondo_registro.css') }}">
</head>
<body class="min-h-screen flex flex-col bg-cover bg-fixed">


    <!-- Botón para volver al inicio -->
    <div class="p-4">
        <a href="{{ asset('home') }}" class="text-green-600 text-3xl" aria-label="Volver al inicio">
            <i class="bi bi-house-fill"></i> 
        </a>
    </div>

    <!-- Contenedor principal -->
    <div class="flex justify-center items-center flex-1 px-4">
        <div class="bg-white bg-opacity-90 rounded-2xl shadow-xl p-8 w-full max-w-sm">
            <h2 class="text-2xl font-semibold text-center text-green-600 mb-6">Iniciar Sesión</h2>

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <!-- Correo Electrónico -->
                <div class="mb-4">
                    <label for="email" class="block text-gray-700 mb-1">Correo Electrónico</label>
                    <input type="email" id="email" name="email" required
                        class="w-full px-4 py-2 rounded-md bg-blue-50 border border-blue-200 focus:outline-none focus:ring-2 focus:ring-green-400">
                </div>

                <!-- Contraseña -->
                <div class="mb-4">
                    <label for="password" class="block text-gray-700 mb-1">Contraseña</label>
                    <input type="password" id="password" name="password" required
                        class="w-full px-4 py-2 rounded-md bg-blue-50 border border-blue-200 focus:outline-none focus:ring-2 focus:ring-green-400">
                </div>

                <!-- Botón de envío -->
                <div class="mt-4">
                    <button type="submit"
                        class="w-full py-2 bg-green-600 text-white rounded-md hover:bg-green-700 transition">
                        Iniciar Sesión
                    </button>
                </div>
            </form>

            <!-- Enlace para registrarse -->
            <div class="mt-4 text-center text-sm text-gray-600">
                ¿No tienes una cuenta?
                <a href="{{ asset('registro') }}" class="text-blue-600 hover:underline">Regístrate aquí</a>
            </div>
        </div>
    </div>

</body>
</html>
