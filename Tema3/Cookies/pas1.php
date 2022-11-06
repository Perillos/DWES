<?php
session_start();


$NOM=$_REQUEST['name'];
$MAIL=$_REQUEST['email'];
$URL=$_REQUEST['url'];
$SEX=$_REQUEST['sex'];



if (
    !empty($NOM) &&
    !empty($MAIL) &&
    !empty($URL) &&
    !empty($SEX)
) {
    $posicion_arroba = strpos($MAIL, "@");
    $posicion_punto = strpos($MAIL, ".", $posicion_arroba);
    if (!$posicion_arroba || !$posicion_punto) {
        // header('Location: formulario1.php');
        echo "hola1";
    } else {
        $_SESSION['nameS']=$NOM;
        $_SESSION['emailS']=$MAIL;
        $_SESSION['urlS']=$URL;
        $_SESSION['sexS']=$SEX;
        header('Location: formulario2.php');
    }
    
} else {
    
    
    $error = "<p>Hay datos vacios</p>";
    $_SESSION['errorS'] = $error;
    header('Location: formulario1.php');

}

