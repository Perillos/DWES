<?php

include "dbcone.php";

$usu=$_POST['user'];
$pwd=$_POST['key'];
$sql = "select * from usuarios where usuario='$usu' and clave='$pwd'";




$resultado = $link->prepare($sql);
$resultado->execute();
$fila = $resultado->fetch();
$type = $fila[3];
if ($fila!=0)
{
session_start();
$_SESSION['nombre']=$usu;
$_SESSION['autentificado'] = "OK";
$_SESSION['tipo'] = $type;
header ("Location: index.php");
}
else {
header ("Location: login.php");
}

?>