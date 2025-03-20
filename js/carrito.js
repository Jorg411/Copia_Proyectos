
// Función para actualizar el carrito desde localStorage
function actualizarCarrito() {
    let carrito = JSON.parse(localStorage.getItem('carrito')) || [];
    const carritoBody = document.getElementById('carrito-body');
    const totalCarrito = document.getElementById('total-carrito');
    carritoBody.innerHTML = '';
    let total = 0;

    carrito.forEach((producto, index) => {
        const subtotal = producto.precio * producto.cantidad;
        total += subtotal;
        carritoBody.innerHTML += `
            <tr>
                <td>${producto.nombre}</td>
                <td>$${producto.precio.toFixed(2)}</td>
                <td>
                    <button class="btn btn-sm btn-secondary" onclick="cambiarCantidad(${index}, -1)">-</button>
                    ${producto.cantidad}
                    <button class="btn btn-sm btn-secondary" onclick="cambiarCantidad(${index}, 1)">+</button>
                </td>
                <td>$${subtotal.toFixed(2)}</td>
                <td><button class="btn btn-sm btn-danger" onclick="eliminarProducto(${index})">Eliminar</button></td>
            </tr>
        `;
    });

    totalCarrito.textContent = `$${total.toFixed(2)}`;
}

// Función para cambiar la cantidad de un producto
function cambiarCantidad(index, cantidad) {
    let carrito = JSON.parse(localStorage.getItem('carrito')) || [];

    // Si la cantidad es mayor que 0, modificamos la cantidad
    if (carrito[index].cantidad + cantidad > 0) {
        carrito[index].cantidad += cantidad;
    } else {
        // Si la cantidad es 0 o menor, eliminamos el producto del carrito
        carrito.splice(index, 1);
    }

    // Guardamos el carrito actualizado en localStorage
    localStorage.setItem('carrito', JSON.stringify(carrito));
    actualizarCarrito();
}

// Función para eliminar producto del carrito
function eliminarProducto(index) {
    let carrito = JSON.parse(localStorage.getItem('carrito')) || [];
    carrito.splice(index, 1);
    localStorage.setItem('carrito', JSON.stringify(carrito));
    actualizarCarrito();
}

// Llamamos a la función para mostrar el carrito al cargar la página
actualizarCarrito();

// Función para procesar la compra
document.getElementById('procesar-compra').addEventListener('click', () => {
    alert('Compra procesada. ¡Gracias por tu compra!');
    localStorage.removeItem('carrito'); // Limpiamos el carrito
    actualizarCarrito(); // Actualizamos el carrito después de la compra
});
