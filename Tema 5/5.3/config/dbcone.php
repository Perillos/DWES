<?php

// Configurar los detalles de la conexión a la base de datos
define("HOST", "localhost");
define("DATABASE_NAME", "clientesdwes");
define("USER_NAME", "root");
define("PASSWORD", "");

$host = "localhost";
$username = "tu_usuario";
$password = "tu_contraseña";
$dbname = "nombre_de_la_base_de_datos";

try {
  // Crear la conexión a la base de datos utilizando PDO
    $dsn = "mysql:host=HOST;dbname=DATABASE_NAME";
    $link = new PDO($dsn, USER_NAME, PASSWORD);

    // Establecer el modo de error PDO a excepción
    $link->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $error) {
    // Mostrar un mensaje de error si la conexión falla
    echo 'Conexión fallida: ' . $error->getMessage();
}
