<?php
include("dbcone.php");
include("head.php");


$value = $_GET['id'];

$resulSel = mysqli_query($link, "SELECT  * FROM clientes WHERE id = '$value'");
$array1 = mysqli_fetch_array($resulSel);


echo "<h1>Estas seguro que quires eliminar al cliente</h1>";

    echo "<table border>";

    echo "
            <tr>
                <td>Nº Cliente:</td>
                <td>DNI</td>
                <td>Nombre</td>
                <td>Dirección</td>
                <td>Localidad</td>
                <td>Provincia</td>
                <td>Teléfono</td>
                <td>Correo electrónico</td>

            </tr>
        ";
    echo "
        <tr>
            <td>$array1[7]</td>
            <td>$array1[0]</td>
            <td>$array1[1]</td>
            <td>$array1[2]</td>
            <td>$array1[3]</td>
            <td>$array1[4]</td>
            <td>$array1[5]</td>
            <td>$array1[6]</td>
        </tr>
    ";
    echo "</table>";

    echo "
    <div class='container'>
    <a href='delete.controler.php?id=".$array1["7"]."' class='button'>Eliminar</a>
    <a href='index.php' class='button'>Volver</a>
    </div>
    ";
?>

