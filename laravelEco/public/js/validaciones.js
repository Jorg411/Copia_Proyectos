  // Validación para el campo "nombre" (solo letras y espacios)
  document.getElementById('nombre').addEventListener('input', function () {
    let nombre = this.value;
    let regex = /^[a-zA-Z\s]*$/;
    if (!regex.test(nombre)) {
        document.getElementById('nombre-error').textContent = 'El nombre solo puede contener letras y espacios.';
    } else {
        document.getElementById('nombre-error').textContent = '';
    }
});

// Validación para el campo "apellido" (solo letras y espacios)
document.getElementById('apellido').addEventListener('input', function () {
    let apellido = this.value;
    let regex = /^[a-zA-Z\s]*$/;
    if (!regex.test(apellido)) {
        document.getElementById('apellido-error').textContent = 'El apellido solo puede contener letras y espacios.';
    } else {
        document.getElementById('apellido-error').textContent = '';
    }
});

// Validación para el campo "edad" (solo números)
document.getElementById('edad').addEventListener('input', function () {
    let edad = this.value;
    let regex = /^[0-9]*$/;
    let minLength = 1; // Mínimo de 1 carácter
    let maxLength = 3; // Máximo de 3 caracteres (considerando una edad de hasta 100 años)

    if (!regex.test(edad)) {
        document.getElementById('edad-error').textContent = 'La edad solo puede contener números.';
    } else if (edad.length < minLength || edad.length > maxLength) {
        document.getElementById('edad-error').textContent = 'La edad debe ser un número entre 1 y 100.';
    } else {
        document.getElementById('edad-error').textContent = '';
    }
});

// Validación para el campo "telefono" (solo números, guiones, espacios y signos +, y entre 10 y 15 caracteres)
document.getElementById('telefono').addEventListener('input', function () {
    let telefono = this.value;
    let regex = /^[0-9\s\-\+]*$/;
    let minLength = 10;
    let maxLength = 15;

    // Verificar que el teléfono solo tenga los caracteres permitidos
    if (!regex.test(telefono)) {
        document.getElementById('telefono-error').textContent = 'El teléfono solo puede contener números, guiones, espacios y signos +.';
    }
    // Verificar la longitud del teléfono
    else if (telefono.length < minLength || telefono.length > maxLength) {
        document.getElementById('telefono-error').textContent = `El teléfono debe tener entre ${minLength} y ${maxLength} caracteres.`;
    } else {
        document.getElementById('telefono-error').textContent = '';
    }
});

// Validación para el campo "email" (formato de correo electrónico válido)
document.getElementById('email').addEventListener('input', function () {
    let email = this.value;
    let regex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;

    if (!regex.test(email)) {
        document.getElementById('email-error').textContent = 'Por favor, ingrese un correo electrónico válido.';
    } else {
        document.getElementById('email-error').textContent = '';
    }
});

// Validación para el campo "contraseña" (verificación de seguridad mínima)
document.getElementById('password').addEventListener('input', function () {
    let password = this.value;
    let passwordError = document.getElementById('password-error');

    // Verificar longitud mínima
    if (password.length < 6) {
        passwordError.textContent = 'La contraseña debe tener al menos 6 caracteres.';
    } else {
        passwordError.textContent = '';
    }
});

// Validación para el campo "confirmar contraseña" (verificación de coincidencia)
document.getElementById('password_confirmation').addEventListener('input', function () {
    let confirmPassword = this.value;
    let password = document.getElementById('password').value;
    let confirmPasswordError = document.getElementById('confirm-password-error');

    if (confirmPassword !== password) {
        confirmPasswordError.textContent = 'Las contraseñas no coinciden.';
    } else {
        confirmPasswordError.textContent = '';
    }
});