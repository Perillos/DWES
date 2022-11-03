<?php
include("dbcone.php");
include("head.php");


$value = $_GET['id'];

$resulSel = mysqli_query($link, "SELECT  * FROM clientes WHERE id = '$value'");
$array1 = mysqli_fetch_array($resulSel);
$resulDel = mysqli_query($link, "DELETE FROM clientesdwes.clientes WHERE id = '$value'");
$my_error = mysqli_error($link);

if(!empty($my_error)) {
    echo "<h2>Ha habido un error al borrar los datos. $my_error<h2>";
} else {
    echo "<h2>Los datos han sido borrados satisfactoriamente</h2>";
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
    echo "

    ";

}

?>

<div class='container'>
    <a href='index.php' class='button'>Volver a los clientes</a>
</div>