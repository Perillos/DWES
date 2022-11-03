<?php
session_start();
$NOMC=$_SESSION['nameS'];
$MAILC=$_COOKIE['emailc'];
$URLC=$_COOKIE['urlc'];
$SEXC=$_COOKIE['sexc'];
$CONVC=$_COOKIE['nconvc'];
$AFICC=$_COOKIE['aficionesc'];
$MENUC=$_COOKIE['menuc'];



echo  "<p>Tu nombre y apellidos: $NOMC</p>";
echo  "<p>Tu email: $MAILC</p>";
echo  "<p>Tu URL: $URLC</p>";
echo  "<p>Tu sexo: $SEXC</p>";
echo  "<p>Tus convivientes: $CONVC</p>";
echo  "<p>Tus aficiones: $AFICC</p>";
echo  "<p>Tu menú: $MENUC</p>";



?>