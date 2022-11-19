<?php

include "dbcone.php";

$usu=$_POST['user'];
$pwd=$_POST['key'];

$sql = "select * from usuarios where usuario='$usu'";
$resultado = $link->prepare($sql);
$resultado->execute();
$fila = $resultado->fetch();
$hash = $fila[2];
$id = $fila[0];



if (password_verify($pwd, $hash)) {
    $type = $fila[3];
    session_start();
    $_SESSION['id']=$id;
    $_SESSION['nombre']=$usu;
    $_SESSION['autentificado'] = "OK";
    $_SESSION['tipo'] = $type;
    header ("Location: index.php");
}
else {
header ("Location: login.php");
}

?>