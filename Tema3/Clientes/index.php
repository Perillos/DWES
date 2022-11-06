<?php

include("dbcone.php");
include("head.php");

$resul1 = mysqli_query($link,"SELECT  * FROM clientes");

echo "<table border>";

echo "
        <tr>
            <td>DNI</td>
            <td>Nombre</td>
            <td>Dirección</td>
            <td>Localidad</td>
            <td>Provincia</td>
            <td>Teléfono</td>
            <td>Correo electrónico</td>
            <td>Editar</td>
            <td>Borrar</td>
        </tr>
    ";


while ($row = mysqli_fetch_row($resul1)){
    $value = $row[7];
    echo "
            <tr>
                <td>$row[0]</td>
                <td>$row[1]</td>
                <td>$row[2]</td>
                <td>$row[3]</td>
                <td>$row[4]</td>
                <td>$row[5]</td>
                <td>$row[6]</td>
                <td><a href='update.form.php?id=".$row["7"]."'><img src='/img/editar.png'></a></td>
                <td><a href='delete.php?id=".$row["7"]."' ><img src='/img/borrar.png'></a></td>
            </tr>
        ";
} 

echo "</table>";

echo "
        <div class='container'>
            <a href='create.form.php' class='button'>Nuevo</a>
        </div>
    ";
?>
