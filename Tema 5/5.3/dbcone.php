<?php

// $DB_URL="localhost";
// $DB_USER="root";
// $DB_PASS= "";
// $DB_NAME="clientesdwes";

// //Conectamos con MySQL y la base de datos club
// $link = mysqli_connect($DB_URL, $DB_USER, $DB_PASS, $DB_NAME);

 
// define("URL", "localhost");
define("USER_DB", "root");
define("PASSWORD", "");

try {
    $dsn = "mysql:host=localhost;dbname=clientesdwes";
    $link = new PDO($dsn, USER_DB, PASSWORD);
    $link->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'Error: '.$e->getMessage();
}

?>