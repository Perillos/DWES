<?php

// Configurar los detalles de la conexión a la base de datos
$host = "localhost";
$database_name = "clientesdwes";
$database_user_name = "root";
$database_password = "root";
//



try {
  // Crear la conexión a la base de datos utilizando PDO
    $dsn = "mysql:host=$host; dbname=$database_name";
    $link = new PDO($dsn, $database_user_name, $database_password);

    // Establecer el modo de error PDO a excepción
    $link->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $error) {
    // Mostrar un mensaje de error si la conexión falla
    echo 'Conexión fallida: ' . $error->getMessage();
}
