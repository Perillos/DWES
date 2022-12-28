<?php


include "dbcone.php";




// Crear usuario

// Recoger datos
$DNI=$_REQUEST['nif'];
$USE=$_REQUEST['use'];
$KEY=$_REQUEST['key'];
$KEYHAS = password_hash($KEY, PASSWORD_DEFAULT);
$NOM=$_REQUEST['name'];
$DIR=$_REQUEST['adress'];
$LOC=$_REQUEST['local'];
$PRO=$_REQUEST['prov'];
$TEL=$_REQUEST['phone'];
$MAIL=$_REQUEST['email'];

$sql = "select * from usuarios where DNI = '$DNI'";
$resultado = $link->prepare($sql);
$resultado->execute();

if ($resultado->fetch() != 0) {
    header ("Location: zona.php");
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
        
        $sql = "INSERT INTO clientesdwes.usuarios (DNI, usuario, clave, type, Nombre, Dirección, Localidad, Provincia, Telefono, email) VALUES ('$DNI', '$USE', '$KEYHAS', 'user', '$NOM', '$DIR', '$LOC', '$PRO', '$TEL', '$MAIL')";
        $insertar = $link->prepare($sql);
        $insertar->execute();

        if(!$insertar) {
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