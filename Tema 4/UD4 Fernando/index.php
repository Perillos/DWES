<?php
include "seguridad.php";
include "dbcone.php";
include "head.php";


$type = $_SESSION['tipo'];
$usu = $_SESSION['nombre'];

if ($type == "admin") {
    $sql = "SELECT  * FROM usuarios";
    $resul1 = $link->prepare($sql);
    $resul1->execute();

    // $resul1 = mysqli_query($link,"SELECT  * FROM usuarios");
} else if ($type == "user") {
    // $resul1 = mysqli_query($link,"SELECT  * FROM usuarios where usuario='$usu'");
}



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


while ($row = $resul1->fetch()){
    $value = $row[7];
    echo "
            <tr>
                <td>$row[5]</td>
                <td>$row[4]</td>
                <td>$row[6]</td>
                <td>$row[7]</td>
                <td>$row[8]</td>
                <td>$row[9]</td>
                <td>$row[10]</td>
                <td><a class='edit' href='update.form.php?id=".$row["0"]."'></a></td>
                <td><a class='delete' href='delete.php?id=".$row["0"]."' ></a></td>
            </tr>
        ";
} 

echo "</table>";


if ($type == "admin") {
    echo "
            <div class='container'>
                <a href='registrate.php' class='button'>Nuevo</a>
                <a href='salir.php' class='button'>Cerrar session</a>
            </div>
        ";
} else if ($type == "user") {
    echo "
            <div class='container'>
                <a href='salir.php' class='button'>Cerrar session</a>
            </div>
        ";
}
?>
