<?php

include "../config/dbconnect.php";
include "../view/templates/head.php";


if (
        empty($_POST['user']) ||
        empty($_POST['dni_number']) ||
        empty($_POST['email'])
    ) {
        echo "
            <h2>Debes rellenar todos los datos, vuelve al formulario</h2>
            <div class='container'>
                <a href='/view/registrate.php' class='button'>Volver</a>
            </div>
    ";
    die();
}

$user=$_POST['user'];
$dni_number=$_POST['dni_number'];
$email=$_POST['email'];


$sql = "SELECT  * FROM users WHERE dni_number = '$dni_number'";
$result = $link->prepare($sql);
$result->execute();
$row = $result->fetch();

// Comprobar que el usuario existe
if (!$row) {
    echo "
        <h2>El usuario no existe, puedes registrarte</h2>
        <div class='container'>
            <a href='registrate.php' class='button'>Registrarse</a>
        </div>
    ";
    die();
}


// Comprobar que el usuario coinciden sus datos
if ($row[1] != $user || $row[11] != $email) {
  echo "
        <h2>El usuario no existe, puedes registrarte</h2>
        <div class='container'>
            <a href='registrate.php' class='button'>Registrarse</a>
        </div>
    ";
    die();
}
