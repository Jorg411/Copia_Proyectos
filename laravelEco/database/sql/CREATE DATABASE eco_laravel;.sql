CREATE DATABASE eco_laravel;

use eco_laravel;

CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(50) NOT NULL,
    apellido VARCHAR(50) NOT NULL,
    edad INT NOT NULL,
    telefono VARCHAR(20),
    genero ENUM('Masculino', 'Femenino', 'Otro') NOT NULL,
    password VARCHAR(255) NOT NULL,
    rol ENUM('admin', 'cliente') DEFAULT 'cliente'
);