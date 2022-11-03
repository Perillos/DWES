<?php
include("auth.php");


$name = empy_name($_REQUEST["nombre"]);
$surname = empy_surName($_REQUEST["apellido"]);
$email = check_email($_REQUEST["email"]);
$sport = select_sport($_REQUEST["sport"]);
$sex = empy_sex($_REQUEST["sex"]);

$drive = select_drive(isset($_REQUEST["conducir"]));

$hobby = empy_hobby($_REQUEST["aficiones"]);

$temporal=$_FILES["miarchivo"]["tmp_name"];
$destino="uploads/".$_FILES["miarchivo"]["name"];

echo "<p>Tu nombre completo es: $name $surname</p>";
echo "<p>Tu email es: $email</p>";
echo "<p>Tu deporte es: $sport</p>";
echo "<p>Tu sexo es: $sex</p>";
echo "<p>Conduces: $drive</p>";
echo empy_file($temporal, $destino);
echo "<p>Aficiones: $hobby</p>";



// print_r($_REQUEST["sex"]);





// echo $name;
// echo $surname;
// echo $email;
// echo $sport;
// echo $sex;
// echo $drive;










?>