<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda Online</title>
    <link rel="stylesheet" href="{{asset('css/productos.css')}}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css" rel="stylesheet">
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

 
  <div class="inicio bg-success text-white py-5 mb-4">
    <div class="container text-center">
        <h1 class="display-4">¡Catalogo!</h1>
        <p class="lead">Mira nuestros productos y antojate </p>
    </div>
  </div>
  <!--carrito de compras-->
  <main class="container">
      <div class="row">
       
              <!-- <div id="carrito" class="card"> -->
                  <!-- <div id="head-carrito" class="card-header text-white">
                      <h2 class="text-center mb-0">Carrito de Compras</h2>
                  </div> -->
                  <div class="card-body">
                      <a href="{{('carrito')}}" class="btn btn-success rounded-circle p-3 position-fixed" style="bottom: 20px; right: 20px;" aria-label="Ir al carrito">
                        <i class="bi bi-cart" style="font-size: 24px;"></i>
                    </a>
                    
                    
                    </div>
              </div>
          </div>

     
          

          <!-- <div class="col-md-8"> -->
              <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-3">
                 <!-- Primer producto -->
                 <div class="col">
                    <div class="card product-card">
                        <img src="{{asset('img/Imagen de WhatsApp 2025-04-08 a las 13.13.30_434a3e91.jpg')}}" class="card-img-top" alt="Strawberries">
                        <div class="card-body">
                            <h5 class="card-title">Botellas decoración</h5>
                            <p class="card-text">$2.00</p>
                            <div class="d-flex justify-content-between">
                                <!-- Llamamos a la función agregarAlCarrito con los parámetros correctos -->
                                <button class="btn btn-success btn-sm w-50 me-1" onclick="agregarAlCarrito('Botellas decoración', 2.00)">Añadir al carrito</button>
                                <button id="detalles-boton" class="btn btn-info btn-sm w-50" data-bs-toggle="modal" data-bs-target="#productDetails1">Detalles</button>
                            </div>             
                        </div>
                    </div>
                </div>
                

        <!-- Modal para detalles del producto 1 -->
        <div class="modal fade" id="productDetails1" tabindex="-1" aria-labelledby="productDetailsLabel1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="productDetailsLabel1">Detalles del Producto</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
                    </div>
                    <div class="modal-body">
                        <img src="{{asset('img/Imagen de WhatsApp 2025-04-08 a las 13.13.30_434a3e91.jpg')}}" class="img-fluid mb-3" alt="Strawberries">
                        <!-- <h5>Botellas deooración</h5>
                        <p>Precio: $2.00</p>
                        <p>hermosas botallas de vidrio para decoracion cas tipo campestre</p> -->
                        <h5><strong>Cepillo dental de bambú</strong></h5>
                    <p><strong>Precio:</strong> $4.000</p>
                    <p><strong>Cepillo dental ecológico hecho de bambú biodegradable, ideal para una higiene bucal natural y sostenible.</strong></p>
                    <p><strong>Calificación:</strong> ⭐⭐⭐⭐⭐ (5.0)</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>
            <!-- segundo producto -->
            <div class="col">
                <div class="card product-card">
                    <img src="img/producto2.jpg" class="card-img-top" alt="Strawberries">
                    <div class="card-body">
                        <h5 class="card-title">Jardin</h5>
                        <p class="card-text">$4.00</p>
                        <div class="d-flex justify-content-between">
                            <!-- Llamamos a la función agregarAlCarrito con los parámetros correctos -->
                            <button class="btn btn-success btn-sm w-50 me-1" onclick="agregarAlCarrito('Jardin', 4.00)">Añadir al carrito</button>
                            <button id="detalles-boton" class="btn btn-info btn-sm w-50" data-bs-toggle="modal" data-bs-target="#productDetails1">Detalles</button>
                        </div>             
                    </div>
                </div>
            </div>
            

    <!-- Modal para detalles del producto 2 -->
    <div class="modal fade" id="productDetails1" tabindex="-1" aria-labelledby="productDetailsLabel1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="productDetailsLabel1">Detalles del Producto</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
                </div>
                <div class="modal-body">
                    <img src="img/producto2.jpg" class="img-fluid mb-3" alt="Strawberries">
                    <h5>Jardin</h5>
                    <p>Precio: $4.00</p>
                    <p>Hermosas jardineras hechas con llantas</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>

        
        
       
            <!-- tercer producto  -->
            <div class="col">
                <div class="card product-card">
                    <img src="img/producto3.webp" class="card-img-top" alt="Strawberries">
                    <div class="card-body">
                        <h5 class="card-title">Decoracion Hallowen</h5>
                        <p class="card-text">$5.00</p>
                        <div class="d-flex justify-content-between">
                            <!-- Llamamos a la función agregarAlCarrito con los parámetros correctos -->
                            <button class="btn btn-success btn-sm w-50 me-1" onclick="agregarAlCarrito('Decoracion Hallowen', 5.00)">Añadir al carrito</button>
                            <button id="detalles-boton" class="btn btn-info btn-sm w-50" data-bs-toggle="modal" data-bs-target="#productDetails1">Detalles</button>
                        </div>             
                    </div>
                </div>
            </div>
            

    <!-- Modal para detalles del producto 3 -->
    <div class="modal fade" id="productDetails1" tabindex="-1" aria-labelledby="productDetailsLabel1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="productDetailsLabel1">Detalles del Producto</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
                </div>
                <div class="modal-body">
                    <img src="img/producto3.webp" class="img-fluid mb-3" alt="Strawberries">
                    <h5>Decoración Hallowen</h5>
                    <p>Precio: $5.00</p>
                    <p>hermosa decoración para el dia de Hallowen</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
        <!-- Cuarto producto -->
           
            <div class="col">
                <div class="card product-card">
                    <img src="img/productos/Imagen de WhatsApp 2024-12-04 a las 21.26.56_976794a7.jpg" class="card-img-top" alt="Strawberries">
                    <div class="card-body">
                        <h5 class="card-title">Cubiertos</h5>
                        <p class="card-text">$7.00</p>
                        <div class="d-flex justify-content-between">
                            <!-- Llamamos a la función agregarAlCarrito con los parámetros correctos -->
                            <button class="btn btn-success btn-sm w-50 me-1" onclick="agregarAlCarrito('Cubiertos', 7.00)">Añadir al carrito</button>
                            <button id="detalles-boton" class="btn btn-info btn-sm w-50" data-bs-toggle="modal" data-bs-target="#productDetails1">Detalles</button>
                        </div>             
                    </div>
                </div>
            </div>
            

    <!-- Modal para detalles del producto 4 -->
    <div class="modal fade" id="productDetails1" tabindex="-1" aria-labelledby="productDetailsLabel1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="productDetailsLabel1">Detalles del Producto</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
                </div>
                <div class="modal-body">
                    <img src="img/productos/Imagen de WhatsApp 2024-12-04 a las 21.26.56_976794a7.jpg" class="img-fluid mb-3" alt="Strawberries">
                    <h5>Strawberries</h5>
                    <p>Precio: $2.00</p>
                    <p>Las fresas son frutas frescas, deliciosas y llenas de antioxidantes.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
     <!-- quinto producto -->
     <div class="col">
        <div class="card product-card">
            <img src="img/productos/Imagen de WhatsApp 2024-12-04 a las 21.26.57_d820d558.jpg" class="card-img-top" alt="Strawberries">
            <div class="card-body">
                <h5 class="card-title">Panel Solar</h5>
                <p class="card-text">$8.00</p>
                <div class="d-flex justify-content-between">
                    <!-- Llamamos a la función agregarAlCarrito con los parámetros correctos -->
                    <button class="btn btn-success btn-sm w-50 me-1" onclick="agregarAlCarrito('Panel Solar', 8.00)">Añadir al carrito</button>
                    <button id="detalles-boton" class="btn btn-info btn-sm w-50" data-bs-toggle="modal" data-bs-target="#productDetails1">Detalles</button>
                </div>             
            </div>
        </div>
    </div>
    

<!-- Modal para detalles del producto 5 -->
<div class="modal fade" id="productDetails1" tabindex="-1" aria-labelledby="productDetailsLabel1" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="productDetailsLabel1">Detalles del Producto</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
        </div>
        <div class="modal-body">
            <img src="img/productos/Imagen de WhatsApp 2024-12-04 a las 21.26.57_d820d558.jpg" class="img-fluid mb-3" alt="Strawberries">
            <h5>Strawberries</h5>
            <p>Precio: $2.00</p>
            <p>Las fresas son frutas frescas, deliciosas y llenas de antioxidantes.</p>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
        </div>
    </div>
</div>
</div>
 <!-- sexto producto -->
 <div class="col">
    <div class="card product-card">
        <img src="img/productos/Imagen de WhatsApp 2024-12-04 a las 21.26.58_042b6391.jpg" class="card-img-top" alt="Strawberries">
        <div class="card-body">
            <h5 class="card-title">Removedor de maquillaje</h5>
            <p class="card-text">$3.00</p>
            <div class="d-flex justify-content-between">
                <!-- Llamamos a la función agregarAlCarrito con los parámetros correctos -->
                <button class="btn btn-success btn-sm w-50 me-1" onclick="agregarAlCarrito('Removedor de maquillaje', 3.00)">Añadir al carrito</button>
                <button id="detalles-boton" class="btn btn-info btn-sm w-50" data-bs-toggle="modal" data-bs-target="#productDetails1">Detalles</button>
            </div>             
        </div>
    </div>
</div>


<!-- Modal para detalles del producto 6-->
<div class="modal fade" id="productDetails1" tabindex="-1" aria-labelledby="productDetailsLabel1" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered">
<div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title" id="productDetailsLabel1">Detalles del Producto</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
    </div>
    <div class="modal-body">
        <img src="img/productos/Imagen de WhatsApp 2024-12-04 a las 21.26.58_042b6391.jpg" class="img-fluid mb-3" alt="Strawberries">
        <h5>Strawberries</h5>
        <p>Precio: $2.00</p>
        <p>Las fresas son frutas frescas, deliciosas y llenas de antioxidantes.</p>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
    </div>
</div>
</div>
</div>
 <!-- septimo producto -->
 <div class="col">
    <div class="card product-card">
        <img src="img/productos/Imagen de WhatsApp 2024-12-04 a las 21.26.59_38e1cfdc.jpg" class="card-img-top" alt="Strawberries">
        <div class="card-body">
            <h5 class="card-title">Pitillos de bambú</h5>
            <p class="card-text">$2.00</p>
            <div class="d-flex justify-content-between">
                <!-- Llamamos a la función agregarAlCarrito con los parámetros correctos -->
                <button class="btn btn-success btn-sm w-50 me-1" onclick="agregarAlCarrito('Pitillos de Bambú', 2.00)">Añadir al carrito</button>
                <button id="detalles-boton" class="btn btn-info btn-sm w-50" data-bs-toggle="modal" data-bs-target="#productDetails1">Detalles</button>
            </div>             
        </div>
    </div>
</div>


<!-- Modal para detalles del producto 7 -->
<div class="modal fade" id="productDetails1" tabindex="-1" aria-labelledby="productDetailsLabel1" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered">
<div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title" id="productDetailsLabel1">Detalles del Producto</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
    </div>
    <div class="modal-body">
        <img src="img/productos/Imagen de WhatsApp 2024-12-04 a las 21.26.59_38e1cfdc.jpg" class="img-fluid mb-3" alt="Strawberries">
        <h5>Strawberries</h5>
        <p>Precio: $2.00</p>
        <p>Las fresas son frutas frescas, deliciosas y llenas de antioxidantes.</p>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
    </div>
</div>
</div>
</div>
 <!-- octavo producto -->
 <div class="col">
    <div class="card product-card">
        <img src="img/productos/Imagen de WhatsApp 2024-12-04 a las 21.27.00_0215d8b1.jpg" class="card-img-top" alt="Strawberries">
        <div class="card-body">
            <h5 class="card-title">Copitos Bambú</h5>
            <p class="card-text">$10.00</p>
            <div class="d-flex justify-content-between">
                <!-- Llamamos a la función agregarAlCarrito con los parámetros correctos -->
                <button class="btn btn-success btn-sm w-50 me-1" onclick="agregarAlCarrito('Copitos bambú', 10.00)">Añadir al carrito</button>
                <button id="detalles-boton" class="btn btn-info btn-sm w-50" data-bs-toggle="modal" data-bs-target="#productDetails1">Detalles</button>
            </div>             
        </div>
    </div>
</div>


<!-- Modal para detalles del producto 8 -->
<div class="modal fade" id="productDetails1" tabindex="-1" aria-labelledby="productDetailsLabel1" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered">
<div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title" id="productDetailsLabel1">Detalles del Producto</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
    </div>
    <div class="modal-body">
        <img src="img/productos/Imagen de WhatsApp 2024-12-04 a las 21.27.00_0215d8b1.jpg" class="img-fluid mb-3" alt="Strawberries">
        <h5>Strawberries</h5>
        <p>Precio: $2.00</p>
        <p>Las fresas son frutas frescas, deliciosas y llenas de antioxidantes.</p>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
    </div>
</div>
</div>
</div>

        <!-- noveno producto -->
     <div class="col">
        <div class="card product-card">
            <img src="img/productos/Imagen de WhatsApp 2024-12-04 a las 21.26.59_38e82845.jpg" class="card-img-top" alt="Strawberries">
            <div class="card-body">
                <h5 class="card-title">Bolsas y Cajas</h5>
                <p class="card-text">$1.00</p>
                <div class="d-flex justify-content-between">
                    <!-- Llamamos a la función agregarAlCarrito con los parámetros correctos -->
                    <button class="btn btn-success btn-sm w-50 me-1" onclick="agregarAlCarrito('Bolsas y cajas', 1.00)">Añadir al carrito</button>
                    <button id="detalles-boton" class="btn btn-info btn-sm w-50" data-bs-toggle="modal" data-bs-target="#productDetails1">Detalles</button>
                </div>             
            </div>
        </div>
    </div>
    

<!-- Modal para detalles del producto 9 -->
<div class="modal fade" id="productDetails1" tabindex="-1" aria-labelledby="productDetailsLabel1" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="productDetailsLabel1">Detalles del Producto</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
        </div>
        <div class="modal-body">
            <img src="img/productos/Imagen de WhatsApp 2024-12-04 a las 21.26.59_38e82845.jpg" class="img-fluid mb-3" alt="Strawberries">
            <h5>Strawberries</h5>
            <p>Precio: $2.00</p>
            <p>Las fresas son frutas frescas, deliciosas y llenas de antioxidantes.</p>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
        </div>
    </div>
</div>
</div>
 <!-- decimo producto -->
 <div class="col">
    <div class="card product-card">
        <img src="img/productos/Imagen de WhatsApp 2024-12-04 a las 21.27.00_c2adea61.jpg" class="card-img-top" alt="Strawberries">
        <div class="card-body">
            <h5 class="card-title">Caja contenedor </h5>
            <p class="card-text">$4.00</p>
            <div class="d-flex justify-content-between">
                <!-- Llamamos a la función agregarAlCarrito con los parámetros correctos -->
                <button class="btn btn-success btn-sm w-50 me-1" onclick="agregarAlCarrito('caja contenedor', 4.00)">Añadir al carrito</button>
                <button id="detalles-boton" class="btn btn-info btn-sm w-50" data-bs-toggle="modal" data-bs-target="#productDetails1">Detalles</button>
            </div>             
        </div>
    </div>
</div>


<!-- Modal para detalles del producto 10 -->
<div class="modal fade" id="productDetails1" tabindex="-1" aria-labelledby="productDetailsLabel1" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered">
<div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title" id="productDetailsLabel1">Detalles del Producto</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
    </div>
    <div class="modal-body">
        <img src="img/productos/Imagen de WhatsApp 2024-12-04 a las 21.27.00_c2adea61.jpg" class="img-fluid mb-3" alt="Strawberries">
        <h5>Strawberries</h5>
        <p>Precio: $2.00</p>
        <p>Las fresas son frutas frescas, deliciosas y llenas de antioxidantes.</p>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
    </div>
</div>
</div>
</div>
 <!-- onceavo producto -->
 <div class="col">
    <div class="card product-card">
        <img src="img/productos/Imagen de WhatsApp 2024-12-04 a las 21.27.28_9f195fa2.jpg" class="card-img-top" alt="Strawberries">
        <div class="card-body">
            <h5 class="card-title">Termos</h5>
            <p class="card-text">$4.00</p>
            <div class="d-flex justify-content-between">
                <!-- Llamamos a la función agregarAlCarrito con los parámetros correctos -->
                <button class="btn btn-success btn-sm w-50 me-1" onclick="agregarAlCarrito('Termos', 4.00)">Añadir al carrito</button>
                <button id="detalles-boton" class="btn btn-info btn-sm w-50" data-bs-toggle="modal" data-bs-target="#productDetails1">Detalles</button>
            </div>             
        </div>
    </div>
</div>


<!-- Modal para detalles del producto 11 -->
<div class="modal fade" id="productDetails1" tabindex="-1" aria-labelledby="productDetailsLabel1" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered">
<div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title" id="productDetailsLabel1">Detalles del Producto</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
    </div>
    <div class="modal-body">
        <img src="img/productos/Imagen de WhatsApp 2024-12-04 a las 21.27.28_9f195fa2.jpg" class="img-fluid mb-3" alt="Strawberries">
        <h5>Strawberries</h5>
        <p>Precio: $2.00</p>
        <p>Las fresas son frutas frescas, deliciosas y llenas de antioxidantes.</p>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
    </div>
</div>
</div>
</div>
 <!-- Primer producto -->
 <div class="col">
    <div class="card product-card">
        <img src="img/producto4.webp" class="card-img-top" alt="Strawberries">
        <div class="card-body">
            <h5 class="card-title">Sala </h5>
            <p class="card-text">$100.00</p>
            <div class="d-flex justify-content-between">
                <!-- Llamamos a la función agregarAlCarrito con los parámetros correctos -->
                <button class="btn btn-success btn-sm w-50 me-1" onclick="agregarAlCarrito('Sala', 100.00)">Añadir al carrito</button>
                <button id="detalles-boton" class="btn btn-info btn-sm w-50" data-bs-toggle="modal" data-bs-target="#productDetails1">Detalles</button>
            </div>             
        </div>
    </div>
</div>


<!-- Modal para detalles del producto 12 -->
<div class="modal fade" id="productDetails1" tabindex="-1" aria-labelledby="productDetailsLabel1" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered">
<div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title" id="productDetailsLabel1">Detalles del Producto</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
    </div>
    <div class="modal-body">
        <img src="img/producto4.webp" class="img-fluid mb-3" alt="Strawberries">
        <h5>Strawberries</h5>
        <p>Precio: $2.00</p>
        <p>Las fresas son frutas frescas, deliciosas y llenas de antioxidantes.</p>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
    </div>
</div>
</div>
</div>

                  <!-- Repeat for other products... -->
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
  
<script src="{{asset('js/agregarCarrito.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>