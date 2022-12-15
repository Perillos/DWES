<?php
include "comprobar.php";
include "head.php";


$name = not_empy($_REQUEST["name"], "nombre");
$surname1 = not_empy($_REQUEST["apellido1"], "apellido 1");
$surname2 = not_empy($_REQUEST["apellido2"], "apellido 2");
$email = check_email($_REQUEST["email"]);
$url = check_url($_REQUEST["url"]);
$sex = empy_sex($_REQUEST["sexo"]);
$convivientes = not_empy($_REQUEST["convivientes"], "número de convivientes");



isset($_POST["sport"]) ? $sport = select_sport($_POST["sport"]) : $sport = "No se han seleccionado aficiones";

// $sport = isset($_POST["sport"]);
// $sport = select_sport($_POST["sport"]);
$menu = not_empy($_REQUEST["menu"], "menu");


echo "<p>Tu nombre completo es: $name $surname1 $surname2</p>";
echo "<p>Tu email es: $email</p>";
echo "<p>Tu pagina web es: $url</p>";
echo "<p>Tu sexo es: $sex</p>";
echo "<p>Número de convivientes en el domiciolio: $convivientes</p>";
echo "<p>Aficiones: $sport</p>";
echo "<p>Tu menú favorito es: $menu</p>";


?>
