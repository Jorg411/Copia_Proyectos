<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito de Compras</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <!-- Navbar -->
<nav class="navbar navbar-expand-lg bg-transparent">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="../../../img/logo-removebg-preview.png" alt="Logo" style="width: 150px; height: 80px;">
        </a>
        
        
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{asset('home')}}">Inicio</a>
                </li>
                <!-- <li class="nav-item">
                    <a class="nav-link" href="../sobre_nosotros/sobre_nosotros.html">Sobre Nosotros</a>
                </li> -->
                <li class="nav-item">
                    <a class="nav-link" href="#footer">Contactanos</a> <!-- Enlace al footer -->
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{asset('productos')}}">Productos</a>
                </li>
               
               
            </ul>
        </div>
    </div>
</nav>
    

    <main class="container my-4">
        <h1 class="text-center mb-4">Carrito de Compras</h1>
        <div class="row">
            <div class="col-md-8">
                <table class="table table-bordered">
                    <thead class="table-light">
                        <tr>
                            <th>Producto</th>
                            <th>Precio</th>
                            <th>Cantidad</th>
                            <th>Total</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody id="carrito-body">
                        <!-- Aquí se añadirán dinámicamente los productos -->
                    </tbody>
                </table>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h4>Total: <span id="total-carrito">$0.00</span></h4>
                        <button class="btn btn-success w-100 mt-3" id="procesar-compra">Procesar Compra</button>
                    </div>
                </div>
            </div>
        </div>
    </main>

<!--footer-->
<footer id="footer" class="bg-dark text-white py-4">
    <div class="container">
        <div class="row">
            <h1 class="text-center">Contactanos</h1>
            <!-- Columna 1: Información de la empresa -->
            <div class="col-md-4">
                <h5>Sobre Nosotros</h5>
                <p>Somos una empresa comprometida con productos ecológicos que ayudan a cuidar el medio ambiente.</p>
            </div>
            <!-- Columna 2: Enlaces rápidos -->
            <div class="col-md-4">
                <h5>Enlaces Rápidos</h5>
                <ul class="list-unstyled">
                    <li><a href="index.html" class="text-white text-decoration-none">Inicio</a></li>
                    <li><a href="productos.html" class="text-white text-decoration-none">Productos</a></li>
                    <li><a href="sobre_nosotros.html" class="text-white text-decoration-none">Sobre Nosotros</a></li>
                    <li><a href="#footer" class="text-white text-decoration-none">Contacto</a></li>
                </ul>
            </div>
            <!-- Columna 3: Redes sociales -->
            <div class="col-md-4">
                <h5>Síguenos</h5>
                <div class="d-flex">
                    <a href="https://www.facebook.com/" class="text-white me-3">
                        <i class="bi bi-facebook" style="font-size: 24px;"></i>
                    </a>
                    <a href="https://www.instagram.com/" class="text-white me-3">
                        <i class="bi bi-instagram" style="font-size: 24px;"></i>
                    </a>
                    <a href="https://x.com/?lang=en" class="text-white me-3">
                        <i class="bi bi-twitter" style="font-size: 24px;"></i>
                    </a>
                </div>
            </div>
        </div>
        <!-- Línea separadora -->
        <hr class="bg-white">
        <!-- Derechos reservados -->
        <div class="text-center">
            <p class="mb-0">© 2024 Eco-Friendly. Todos los derechos reservados.</p>
        </div>
    </div>
  </footer>

   <script src="../../../js/carrito.js"></script>
    
</body>
</html>
