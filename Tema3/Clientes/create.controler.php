<?php

include("head.php");


$DNI=$_REQUEST['nif'];
$NOM=$_REQUEST['name'];
$DIR=$_REQUEST['adress'];
$LOC=$_REQUEST['local'];
$PRO=$_REQUEST['prov'];
$TEL=$_REQUEST['phone'];
$MAIL=$_REQUEST['email'];

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
                <h2>Debes escribir un Email correcto, vuelve al formulario</h2>
                <div class='container'>
                    <a href='create.form.php' class='button'>Volver</a>
                </div>
        ";
    } else {
        include("dbcone.php");

        mysqli_query($link, "INSERT INTO clientesdwes.clientes (DNI, Nombre, Dirección, Localidad, Provincia, Telefono, email) VALUES ('$DNI', '$NOM', '$DIR', '$LOC', '$PRO', '$TEL', '$MAIL')");
        $my_error = mysqli_error($link);

        if(!empty($my_error)) {
            echo "<h2>Ha habido un error al insertar los datos. $my_error<h2>";
        } else {
            echo "<h2>Los datos han sido introducidos satisfactoriamente</h2>";
            echo "
                <div class='container'>
                    <a href='index.php' class='button'>Volver a los clientes</a>
                </div>
            ";

        }
    }
} else {
    echo "
            <h2>Debes rellenar todos los datos, vuelve al formulario</h2>
            <div class='container'>
                <a href='create.form.php' class='button'>Volver</a>
            </div>
    ";
}

?>