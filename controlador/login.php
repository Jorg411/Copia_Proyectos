<?php
// Conexión a la base de datos
$host = "localhost:3307";
$dbname = "gestion_usuario"; // nombre de base de datos
$username = "root"; // Usuario de la base de datos
$password = ""; // Contraseña de la base de datos

$conn = new mysqli($host, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Error al conectar a la base de datos: " . $conn->connect_error);
}

// Verificar si se recibieron los datos del formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $contraseña_ingresada = $_POST['contraseña']; // Renombrada para evitar confusión


   if(!empty($email) && !empty($password)){
    $sql= "SELECT id ,nombre,contraseña, rol FROM usuarios WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result(); 
   }
   if($result->num_rows== 0){
    $sql = "SELECT id,nombre,contraseña,rol FROM administrador WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result(); 
   }

   if ($fila["rol"] == "admin") {
    header("Location: /ecoFriendlyPag/vista/administrador/index.html");
    exit(); // Detiene la ejecución después de la redirección
} else {
    header("Location: /ecoFriendlyPag/vista/cliente/index/index.html");
    exit(); // Detiene la ejecución después de la redirección
}

// Si la autenticación falla
$error = "Contraseña incorrecta.";







    // Consulta para obtener el hash de la contraseña
    // $stmt = $conn->prepare("SELECT contraseña FROM usuario WHERE email = ?");
    // $stmt->bind_param("s", $email);
    // $stmt->execute();
    // $result = $stmt->get_result();

    // // Verificar si el usuario existe
    // if ($result->num_rows > 0) {
    //     $row = $result->fetch_assoc();
    //     $contraseña_db = $row['contraseña']; // Contraseña encriptada de la base de datos

    //     // Validar la contraseña ingresada contra la almacenada
    //     if (password_verify($contraseña_ingresada, $contraseña_db)) {
    //         echo "<script>alert('Inicio de sesión exitoso');</script>";
    //         echo "<script>window.location.href = '../../cliente/index';</script>";
    //     } else {
    //         echo "<script>alert('Contraseña incorrecta');</script>";
    //     }
    // } else {
    //     echo "<script>alert('No se encontró el usuario');</script>";
    // }
}
    $stmt->close();


$conn->close();

?>
