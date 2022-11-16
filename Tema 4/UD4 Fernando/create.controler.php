<?php

include "head.php";
include "dbcone.php";

$DNI=$_REQUEST['nif'];
$USE=$_REQUEST['use'];
$KEY=$_REQUEST['key'];
$NOM=$_REQUEST['name'];
$DIR=$_REQUEST['adress'];
$LOC=$_REQUEST['local'];
$PRO=$_REQUEST['prov'];
$TEL=$_REQUEST['phone'];
$MAIL=$_REQUEST['email'];

$sql = "select * from usuarios where DNI = '$DNI'";
$resultado = mysqli_query($link,$sql);

if (mysqli_num_rows($resultado) != 0) {
    echo "
        <h3>El usuario ya ha sido registrado con ese DNI</h3>
        <div class='container'>
            <a href='login.php' class='button'>Login</a>
        </div>
    ";
    
    header ("Location: login.php");
}


if(
    !empty($DNI) &&
    !empty($USE) &&
    !empty($KEY) &&
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


        mysqli_query($link, "INSERT INTO clientesdwes.usuarios (DNI, usuario, clave, type, Nombre, Dirección, Localidad, Provincia, Telefono, email) VALUES ('$DNI', '$USE', '$KEY', 'user', '$NOM', '$DIR', '$LOC', '$PRO', '$TEL', '$MAIL')");
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