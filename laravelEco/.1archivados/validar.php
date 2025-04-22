<?php
// Función para validar que un texto solo tenga letras y espacios
function validarSoloLetras($texto) {
    if (preg_match("/^\s+/", $texto)) { // Verifica si el texto comienza con espacios
        return "El campo no puede comenzar con espacios.";
    }
    return !preg_match("/^[a-zA-Z\s]*$/", $texto) ? "Solo se permiten letras y espacios." : "";
}

// Función para validar un email
function validarEmail($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL) ? "" : "Email no válido."; // Utiliza la función incorporada de PHP para validar
}

// Función para validar la edad (debe estar entre 1 y 120)
function validarEdad($edad) {
    return filter_var($edad, FILTER_VALIDATE_INT, ["options" => ["min_range" => 1, "max_range" => 120]]) 
        ? "" : "Ingrese una edad válida entre 1 y 120.";
}

// Función para validar un número de teléfono (7-15 dígitos)
function validarTelefono($telefono) {
    return preg_match("/^\d{7,15}$/", $telefono) ? "" : "Ingrese un número de teléfono válido (7-15 dígitos).";
}

// Función para validar que un valor esté en una lista de opciones
function validarSeleccion($valor, $opcionesValidas) {
    return !in_array($valor, $opcionesValidas) ? "Seleccione una opción válida." : "";
}

// Función para validar la fortaleza de una contraseña
function validarContraseña($contraseña) {
    if (strlen($contraseña) < 8) { // Mínimo 8 caracteres
        return "La contraseña debe tener al menos 8 caracteres.";
    }
    if (!preg_match('/[A-Z]/', $contraseña)) { // Al menos una letra mayúscula
        return "La contraseña debe incluir al menos una letra mayúscula.";
    }
    if (!preg_match('/[a-z]/', $contraseña)) { // Al menos una letra minúscula
        return "La contraseña debe incluir al menos una letra minúscula.";
    }
    if (!preg_match('/[0-9]/', $contraseña)) { // Al menos un número
        return "La contraseña debe incluir al menos un número.";
    }
    if (!preg_match('/[\W]/', $contraseña)) { // Al menos un carácter especial
        return "La contraseña debe incluir al menos un carácter especial.";
    }
    return "";
}

// Función para confirmar que las contraseñas coinciden
function confirmarContraseña($contraseña, $confirmarContraseña) {
    return $contraseña !== $confirmarContraseña ? "Las contraseñas no coinciden." : "";
}

// Inicializar variables
$nombre = $apellido = $email = $edad = $telefono = $genero = $contraseña =$rol = $confirmar_contraseña = "";
$errores = [
    "nombre" => "",
    "apellido" => "",
    "email" => "",
    "edad" => "",
    "telefono" => "",
    "genero" => "",
    "contraseña" => "",
    "rol"=>"",
    "confirmar_contraseña" => "",
    "general" => ""
];
$formularioEnviado = false;
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Asignar valores asegurando que existan en $_POST
    $nombre = trim($_POST["nombre"] ?? "");
    $apellido = trim($_POST["apellido"] ?? "");
    $email = trim($_POST["email"] ?? "");
    $edad = trim($_POST["edad"] ?? "");
    $telefono = trim($_POST["telefono"] ?? "");
    $genero = trim($_POST["genero"] ?? ""); // Asegurar que se recibe el género
    $contraseña = trim($_POST["contraseña"] ?? "");
    $rol = trim($_POST["rol"] ?? ""); // Asegurar que se recibe el rol
    $confirmar_contraseña = trim($_POST["confirmar_contraseña"] ?? "");

    // Validaciones
    $errores["nombre"] = validarSoloLetras($nombre);
    $errores["apellido"] = validarSoloLetras($apellido);
    $errores["email"] = validarEmail($email);
    $errores["edad"] = validarEdad($edad);
    $errores["telefono"] = validarTelefono($telefono);
    $errores["genero"] = validarSeleccion($genero, ["mas", "fem", "otro"]);
    $errores["rol"] = validarSeleccion($rol, ["adm", "cli"]);
    $errores["contraseña"] = validarContraseña($contraseña);

    if (empty($errores["contraseña"])) {
        $errores["confirmar_contraseña"] = confirmarContraseña($contraseña, $confirmar_contraseña);
    }

    // Filtrar errores vacíos
    $errores = array_filter($errores);

    // Si no hay errores, insertar en la base de datos
    if (empty($errores)) {
        $contraseñaHasheada = password_hash($contraseña, PASSWORD_DEFAULT);

        $conexion = new mysqli("localhost:3307", "root", "", "gestion_usuario");

        if ($conexion->connect_error) {
            die("Error de conexión: " . $conexion->connect_error);
        }

        if ($rol == "cli") {
            $sql = "INSERT INTO usuario (nombre, apellido, email, edad, telefono, genero, contraseña, rol) 
                    VALUES ('$nombre', '$apellido', '$email', '$edad', '$telefono', '$genero', '$contraseñaHasheada', '$rol')";
        } else if ($rol == "adm") {
            $sql = "INSERT INTO administrador (nombre, apellido, email, edad, telefono, genero, contraseña, rol) 
                    VALUES ('$nombre', '$apellido', '$email', '$edad', '$telefono', '$genero', '$contraseñaHasheada', '$rol')";
        }
        

        if (mysqli_query($conexion, $sql)) {
            $formularioEnviado = true;
            $nombre = $apellido = $email = $edad = $telefono = $genero = $contraseña = $rol = $confirmar_contraseña = "";
        } else {
            $errores["general"] = "Error al guardar los datos: " . mysqli_error($conexion);
        }

        $conexion->close();
    }
}

?>