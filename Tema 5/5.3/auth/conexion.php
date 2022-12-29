<?php

include "../config/dbconnect.php";

$user=$_POST['user'];
$password=$_POST['password'];

$sql = "select * from users where user = '$user'";
$resultado = $link->prepare($sql);
$resultado->execute();
$fila = $resultado->fetch();
$passwordhash = $fila[2];
$id = $fila[0];



if (password_verify($password, $passwordhash)) {
    $type = $fila[3];
    session_start();
    $_SESSION['id_user']=$id;
    $_SESSION['name_user']=$user;
    $_SESSION['type_user'] = $type;
    $_SESSION['autentificado'] = "OK";
    header ("Location: /view/home.php");
}
else {
header ("Location: login.php");
}

?>