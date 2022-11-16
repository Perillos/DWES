<?php

include("dbcone.php");

$usu=$_POST['user'];
$pwd=$_POST['key'];
$sql = "select * from usuarios where usuario='$usu' and clave='$pwd'";
$resultado = mysqli_query($link,$sql);
$resarray = mysqli_fetch_array($resultado);
$type = $resarray[3];


if (mysqli_num_rows($resultado)!=0)
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

// mysql_free_result($resultado);
// mysql_close($link);
?>