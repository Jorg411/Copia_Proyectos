
    // Función para agregar un producto al carrito en localStorage
    function agregarAlCarrito(nombre, precio) {
        // Obtenemos el carrito del localStorage
        let carrito = JSON.parse(localStorage.getItem('carrito')) || [];

        // Verificamos si el producto ya está en el carrito
        const productoExistente = carrito.find(p => p.nombre === nombre);
        if (productoExistente) {
            // Si el producto existe, incrementamos la cantidad
            productoExistente.cantidad++;
        } else {
            // Si el producto no existe, lo agregamos al carrito
            carrito.push({ nombre, precio, cantidad: 1 });
        }

        // Guardamos el carrito actualizado en localStorage
        localStorage.setItem('carrito', JSON.stringify(carrito));

        // Muestra una alerta o cambia el botón
        alert(`${nombre} ha sido añadido al carrito.`);
    }
