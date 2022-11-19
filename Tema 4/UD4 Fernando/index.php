<?php
include "seguridad.php";
include "dbcone.php";
include "head.php";

// class Cliente{
//     private $usuario;
//     private $clave;
//     private $nombre;
//     private $dni;
//     private $type;
//     private $type;
//     private $type;
//     private $type;
//     public function NombreClave(){
//     return $this->usuario.' '.$this->clave;
//     }
// }

echo "<h1>Lista de Usuarios</h1>";

?>
<form method="POST" action="index.php">
    <div>
        <label for="buscar">Buscar:</label>
        <input name="buscar" type="text" id="buscar" placeholder="DNI">
    </div>

    <div class="container">
        <input name="Enviar" value="Buscar" type="submit" class="button"><br>
    </div>

</form>

<?php

if (isset($_REQUEST['buscar'])) {
    $DNI=$_REQUEST['buscar'];
} else {
    $DNI = "";
}



$type = $_SESSION['tipo'];
$usu = $_SESSION['nombre'];

if ($type == "admin") {
    if ($DNI != "")  {
        $sql = "SELECT  * FROM usuarios where DNI='$DNI'";
        $resul1 = $link->prepare($sql);
        $resul1->execute();
    } else {
        $sql = "SELECT  * FROM usuarios";
        $resul1 = $link->prepare($sql);
        $resul1->execute();
    }

} else if ($type == "user") {
    $sql = "SELECT  * FROM usuarios where usuario='$usu'";
    $resul1 = $link->prepare($sql);
    $resul1->execute();
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
