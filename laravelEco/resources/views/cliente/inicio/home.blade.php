<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>eco-friendly</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'eco-green': '#059669',
                        'eco-light': '#10b981',
                        'eco-dark': '#047857',
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-green-50">

<!-- Navbar -->
<nav class="bg-white shadow-md">
    <div class="max-w-7xl mx-auto px-4">
        <div class="flex justify-between items-center h-16">
            <a href="#" class="flex items-center">
                <img src="{{asset('img/logo-removebg-preview.png')}}" alt="Logo" class="w-32 h-16">
            </a>
            
            <button class="md:hidden text-gray-600">
                <i class="bi bi-list text-2xl"></i>
            </button>
            
            <div class="hidden md:flex items-center space-x-8">
                <ul class="flex space-x-6">
                    <li><a class="text-eco-dark hover:text-eco-green font-medium" href="{{route('home')}}">Inicio</a></li>
                    <li><a class="text-gray-600 hover:text-eco-green font-medium" href="#footer">Contactanos</a></li>
                    <li><a class="text-gray-600 hover:text-eco-green font-medium" href="{{asset('productos')}}">Productos</a></li>
                </ul>
                
                @auth
                    <div class="relative">
                        <a class="flex items-center text-eco-dark hover:text-eco-green" href="#" id="navbarDropdown">
                            <i class="bi bi-person-circle mr-2"></i> {{ Auth::user()->nombre }}
                        </a>
                        <div class="absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg hidden">
                            <a class="block px-4 py-2 text-sm text-gray-700 hover:bg-green-50" href="{{ route('cliente.perfil') }}">Mi Perfil</a>
                            <hr class="my-1">
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button type="submit" class="block w-full text-left px-4 py-2 text-sm text-gray-700 hover:bg-green-50">
                                    <i class="bi bi-box-arrow-right mr-2"></i> Cerrar Sesión
                                </button>
                            </form>
                        </div>
                    </div>
                @else
                    <a href="{{route('login')}}" class="bg-eco-green hover:bg-eco-dark text-white px-6 py-2 rounded-full font-medium transition-colors">INICIAR SESIÓN</a>
                @endauth
            </div>
        </div>
    </div>
</nav>

<!-- Hero Section -->
<button class="fixed bottom-4 right-4 bg-eco-green text-white w-12 h-12 rounded-full shadow-lg hover:bg-eco-dark transition-colors flex items-center justify-center" onclick="scrollToTop()">
  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
    <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 6.75 12 3m0 0 3.75 3.75M12 3v18" />
  </svg>
</button>

<div class="bg-gradient-to-r from-eco-green to-eco-light text-white py-16 mb-8">
    <div class="max-w-4xl mx-auto text-center px-4">
        <h1 class="text-4xl md:text-5xl font-bold mb-4">¡Somos una empresa de productos ecológicos!</h1>
        <p class="text-xl opacity-90"></p>
    </div>
</div>

<!-- Mensaje de éxito si existe -->
@if(session('success'))
    <div class="max-w-4xl mx-auto px-4 mb-6">
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
            {{ session('success') }}
            <button type="button" class="absolute top-0 bottom-0 right-0 px-4 py-3" data-dismiss="alert">
                <i class="bi bi-x-lg"></i>
            </button>
        </div>
    </div>
@endif

<!-- Sobre Nosotros -->
<div class="max-w-4xl mx-auto my-12 px-4">
    <div class="bg-white rounded-lg shadow-md p-8">
        <h2 class="text-3xl font-bold text-eco-dark text-center mb-6">ECO_FRIENDLY</h2>
        <p class="text-gray-700 text-lg leading-relaxed mb-4">
            Somos una pequeña empresa centrada en el cuidado del planeta. El problema ambiental radica en el consumismo excesivo e innecesario, que conlleva a la sobreproducción, el uso desmedido de recursos naturales, la generación de desechos y la contaminación del medio ambiente.
        </p>
        <p class="text-gray-700 text-lg leading-relaxed">
            El objetivo de este proyecto es promover y vender productos amigables con el medio ambiente, concientizando a las personas sobre la importancia de proteger el medio ambiente.
        </p>
    </div>
</div>

<!-- Productos -->
<div class="max-w-6xl mx-auto my-12 px-4">
    <h3 class="text-3xl font-bold text-eco-dark text-center mb-8">Nuestros Productos Destacados</h3>
    <div class="grid md:grid-cols-3 gap-6">
        <!-- Tarjeta 1 -->
        <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow">
            <img src="img/producto1.jpg" class="w-full h-48 object-cover" alt="Producto 1">
            <div class="p-6">
                <h5 class="text-xl font-bold text-eco-dark mb-3">Botella Reutilizable</h5>
                <p class="text-gray-600 mb-4">Perfecta para reducir el uso de plástico. Fabricada con materiales 100% reciclables.</p>
                <a href="productos.html" class="bg-eco-green hover:bg-eco-dark text-white px-4 py-2 rounded font-medium transition-colors">Ver más</a>
            </div>
        </div>
        
        <!-- Tarjeta 2 -->
        <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow">
            <img src="img/producto2.jpg" class="w-full h-48 object-cover" alt="Producto 2">
            <div class="p-6">
                <h5 class="text-xl font-bold text-eco-dark mb-3">Bolsas Biodegradables</h5>
                <p class="text-gray-600 mb-4">Ideales para tus compras, se descomponen fácilmente en el medio ambiente.</p>
                <a href="productos.html" class="bg-eco-green hover:bg-eco-dark text-white px-4 py-2 rounded font-medium transition-colors">Ver más</a>
            </div>
        </div>
        
        <!-- Tarjeta 3 -->
        <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow">
            <img src="img/depositphotos_82110258-stock-photo-recycled-chair-made-from-plastic.jpg" class="w-full h-48 object-cover" alt="Producto 3">
            <div class="p-6">
                <h5 class="text-xl font-bold text-eco-dark mb-3">Cepillo de Bambú</h5>
                <p class="text-gray-600 mb-4">Cuida tus dientes y el planeta con este cepillo ecológico y resistente.</p>
                <a href="productos.html" class="bg-eco-green hover:bg-eco-dark text-white px-4 py-2 rounded font-medium transition-colors">Ver más</a>
            </div>
        </div>
    </div>
</div>

<!-- Carrusel de Ofertas -->
<div class="max-w-6xl mx-auto my-12 px-4">
    <h2 class="text-3xl font-bold text-eco-dark text-center mb-8">Descuentos Fechas Importantes</h2>
    <div class="relative">
        <div class="carousel-container overflow-hidden rounded-lg">
            <div class="carousel-slides flex transition-transform duration-300" id="carousel">
                <div class="carousel-slide min-w-full relative">
                    <img src="img/Leonardo_Phoenix_A_vibrant_and_colorful_illustration_of_a_fest_0.jpg" class="w-full h-96 object-cover" alt="Oferta 1">
                    <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center">
                        <div class="text-center text-white">
                            <h5 class="text-2xl font-bold mb-2">50% de descuento en Botellas Reutilizables</h5>
                            <p class="text-lg">Aprovecha esta oferta limitada y contribuye al cuidado del planeta.</p>
                        </div>
                    </div>
                </div>
                <div class="carousel-slide min-w-full relative">
                    <img src="img/Leonardo_Phoenix_A_whimsical_illustration_showcasing_the_conce_3.jpg" class="w-full h-96 object-cover" alt="Oferta 2">
                    <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center">
                        <div class="text-center text-white">
                            <h5 class="text-2xl font-bold mb-2">30% en Bolsas Biodegradables</h5>
                            <p class="text-lg">Haz tus compras de forma sostenible y económica.</p>
                        </div>
                    </div>
                </div>
                <div class="carousel-slide min-w-full relative">
                    <img src="img/Leonardo_Phoenix_A_vibrant_and_colorful_illustration_of_a_Moth_3.jpg" class="w-full h-96 object-cover" alt="Oferta 3">
                    <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center">
                        <div class="text-center text-white">
                            <h5 class="text-2xl font-bold mb-2">Descuento Especial en Cepillos de Bambú</h5>
                            <p class="text-lg">Cambia tu cepillo por uno ecológico y amigable con el medio ambiente.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Controles -->
        <button class="absolute left-4 top-1/2 transform -translate-y-1/2 bg-eco-green text-white w-10 h-10 rounded-full hover:bg-eco-dark transition-colors" onclick="prevSlide()">
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mx-auto">
        <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 15.75 3 12m0 0 3.75-3.75M3 12h18" />
    </svg>
</button>

        <button class="absolute right-4 top-1/2 transform -translate-y-1/2 bg-eco-green text-white w-10 h-10 rounded-full hover:bg-eco-dark transition-colors" onclick="nextSlide()">
  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mx-auto">
    <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
  </svg>
</button>
        
        <!-- Indicadores -->
        <div class="flex justify-center mt-4 space-x-2">
            <button class="w-3 h-3 rounded-full bg-eco-green carousel-indicator active" onclick="goToSlide(0)"></button>
            <button class="w-3 h-3 rounded-full bg-gray-300 carousel-indicator" onclick="goToSlide(1)"></button>
            <button class="w-3 h-3 rounded-full bg-gray-300 carousel-indicator" onclick="goToSlide(2)"></button>
        </div>
    </div>
</div>

<!-- Footer -->
<footer id="footer" class="bg-gray-800 text-white py-12">
    <div class="max-w-6xl mx-auto px-4">
        <h1 class="text-3xl font-bold text-center mb-8 text-eco-light">Contactanos</h1>
        <div class="grid md:grid-cols-3 gap-8">
            <!-- Columna 1 -->
            <div>
                <h5 class="text-xl font-bold mb-4 text-eco-light">Sobre Nosotros</h5>
                <p class="text-gray-300">Somos una empresa comprometida con productos ecológicos que ayudan a cuidar el medio ambiente.</p>
            </div>
            
            <!-- Columna 2 -->
            <div>
                <h5 class="text-xl font-bold mb-4 text-eco-light">Enlaces Rápidos</h5>
                <ul class="space-y-2">
                    <li><a href="{{route('home')}}" class="text-gray-300 hover:text-eco-light transition-colors">Inicio</a></li>
                    <li><a href="productos.html" class="text-gray-300 hover:text-eco-light transition-colors">Productos</a></li>
                    <li><a href="sobre_nosotros.html" class="text-gray-300 hover:text-eco-light transition-colors">Sobre Nosotros</a></li>
                    <li><a href="#footer" class="text-gray-300 hover:text-eco-light transition-colors">Contacto</a></li>
                </ul>
            </div>
            
            <!-- Columna 3 -->
            <div>
                <h5 class="text-xl font-bold mb-4 text-eco-light">Síguenos</h5>
                <div class="flex space-x-4">
                    <a href="https://www.facebook.com/" class="text-white hover:text-eco-light transition-colors">
                        <i class="bi bi-facebook text-2xl"></i>
                    </a>
                    <a href="https://www.instagram.com/" class="text-white hover:text-eco-light transition-colors">
                        <i class="bi bi-instagram text-2xl"></i>
                    </a>
                    <a href="https://x.com/?lang=en" class="text-white hover:text-eco-light transition-colors">
                        <i class="bi bi-twitter text-2xl"></i>
                    </a>
                </div>
            </div>
        </div>
        
        <!-- Copyright -->
        <hr class="border-gray-600 my-8">
        <div class="text-center">
            <p class="text-gray-400">© 2024 Eco-Friendly. Todos los derechos reservados.</p>
        </div>
    </div>
</footer>

<script>
    let currentSlide = 0;
    const slides = document.querySelectorAll('.carousel-slide');
    const indicators = document.querySelectorAll('.carousel-indicator');
    
    function showSlide(index) {
        const carousel = document.getElementById('carousel');
        carousel.style.transform = `translateX(-${index * 100}%)`;
        
        indicators.forEach((indicator, i) => {
            if (i === index) {
                indicator.classList.remove('bg-gray-300');
                indicator.classList.add('bg-eco-green');
            } else {
                indicator.classList.remove('bg-eco-green');
                indicator.classList.add('bg-gray-300');
            }
        });
    }
    
    function nextSlide() {
        currentSlide = (currentSlide + 1) % slides.length;
        showSlide(currentSlide);
    }
    
    function prevSlide() {
        currentSlide = (currentSlide - 1 + slides.length) % slides.length;
        showSlide(currentSlide);
    }
    
    function goToSlide(index) {
        currentSlide = index;
        showSlide(currentSlide);
    }
    
    function scrollToTop() {
        window.scrollTo({top: 0, behavior: 'smooth'});
    }
    
    // Auto-play carousel
    setInterval(nextSlide, 5000);
</script>

</body>
</html>