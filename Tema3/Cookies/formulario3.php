<?php


include("head.php");
include("dbcone.php");
session_start();

$NOMC=$_SESSION['nameS'];
$MAILC=$_SESSION['emailS'];
$URLC=$_SESSION['urlS'];
$SEXC=$_SESSION['sexS'];


$CONV=$_REQUEST['nconv'];

if (empty($_REQUEST['aficiones'])) {
    $AFIC[]= "No tienes aficiones";
} else {
    $AFIC=$_REQUEST['aficiones'];
}

$MENU=$_REQUEST['menu'];




echo  "<p>Tu nombre y apellidos: $NOMC</p>";
echo  "<p>Tu email: $MAILC</p>";
echo  "<p>Tu URL: $URLC</p>";
echo  "<p>Tu sexo: $SEXC</p>";
echo  "<p>Tus convivientes: $CONV</p>";

echo  "<p>Tus aficiones: ";


foreach ($AFIC as $afi) {
    echo " $afi";
}
echo ".</p>";
echo  "<p>Tu menú: $MENU</p>";





$JAFIC = json_encode($AFIC);

mysqli_query($link, "INSERT INTO clientesdwes.sesiones (nombre, email, urls, sexo, convivientes, aficiones, menu) VALUES ('$NOMC', '$MAILC', '$URLC', '$SEXC', '$CONV', '$JAFIC', '$MENU')");
$my_error = mysqli_error($link);

if(!empty($my_error)) {
    echo "<h2>Ha habido un error al insertar los datos. $my_error<h2>";
} else {
    echo "<h2>Los datos han sido introducidos satisfactoriamente</h2>";
    echo "
        <div class='container'>
            <a href='formulario1.php' class='button'>Volver</a>
        </div>
    ";

}

?>
