<?php
include("head.php");

session_start();

$NOMC=$_SESSION['nameS'];
$MAILC=$_SESSION['emailS'];
$URLC=$_SESSION['urlS'];
$SEXC=$_SESSION['sexS'];
$CONVS=$_REQUEST['nconv'];
$AFICS=$_REQUEST['aficiones'];
$MENUS=$_REQUEST['menu'];



echo  "<p>Tu nombre y apellidos: $NOMC</p>";
echo  "<p>Tu email: $MAILC</p>";
echo  "<p>Tu URL: $URLC</p>";
echo  "<p>Tu sexo: $SEXC</p>";
echo  "<p>Tus convivientes: $CONVS</p>";

echo  "<p>Tus aficiones: ";

foreach ($AFICS as $afi) {
    echo " $afi";
}
echo ".</p>";
echo  "<p>Tu menú: $MENUS</p>";



?>