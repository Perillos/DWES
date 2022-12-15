<?php
include "seguridad.php";
include "head.php";

$ID = $_GET['id'];
$DNI = $_REQUEST['nif'];
$NOM = $_REQUEST['name'];
$DIR = $_REQUEST['adress'];
$LOC = $_REQUEST['local'];
$PRO = $_REQUEST['prov'];
$TEL = $_REQUEST['phone'];
$MAIL = $_REQUEST['email'];

if(
    !empty($DNI) &&
    !empty($NOM) &&
    !empty($DIR) &&
    !empty($LOC) &&
    !empty($PRO) &&
    !empty($TEL) &&
    !empty($MAIL)

) {
    $posicion_arroba = strpos($MAIL, "@");
    $posicion_punto = strpos($MAIL, ".", $posicion_arroba);
    if (!$posicion_arroba || !$posicion_punto) {
        echo "
                <h2>Debes escribir un Email correcto, vuelve al formulario. </h2>
                <div class='container'>
                    <a href='update.form.php?id=".$ID."' class='button'>Volver</a>
                </div>
        ";
    } else {
        include("dbcone.php");
        $sql = "UPDATE clientesdwes.usuarios
        SET DNI = '$DNI', Nombre = '$NOM', Dirección = '$DIR', Localidad = '$LOC', Provincia = '$PRO', Telefono = '$TEL', email = '$MAIL' WHERE id = '$ID'";
        $result = $link->prepare($sql);
        $resultDe = $result->execute();;

        

        if(!$resultDe) {
            echo "<h2>Ha habido un error al insertar los valores. $my_error<h2>";
        } else {
            echo "<h2>Los datos han sido modificados satisfactoriamente</h2>";
            echo "
                <div class='container'>
                    <a href='index.php' class='button' >Volver a los clientes</a>
                </div>
            ";

        }
    }
  
} else {
    $from = "index.php";
    echo "
            <h2>Debes rellenar todos los datos, vuelve al formulario</h2>
            <div class='container'>
                <a href='update.form.php?id=".$ID."' class='button'>Volver</a>
            </div>
    ";
}

?>
