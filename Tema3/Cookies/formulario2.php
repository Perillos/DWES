<?php
session_start();
$expira=365*24*3600;

$NOM=$_REQUEST['name'];
$MAIL=$_REQUEST['email'];
$URL=$_REQUEST['url'];
$SEX=$_REQUEST['sex'];
$CONV=$_REQUEST['nconv'];
$AFIC=$_REQUEST['aficiones'];
$MENU=$_REQUEST['menu'];


$_SESSION['nameS']=$NOM;
$_SESSION['emailS']=$MAIL;
$_SESSION['urlS']=$URL;
$_SESSION['sexS']=$SEX;


// session_register("namec",$NOM,time()+$expira);
setcookie("emailc",$MAIL,time()+$expira);
setcookie("urlc",$URL,time()+$expira);
setcookie("sexc",$SEX,time()+$expira);
setcookie("nconvc",$CONV,time()+$expira);
setcookie("aficionesc",$AFIC,time()+$expira);
setcookie("menuc",$MENU,time()+$expira);


header("Location: formulario3.php");

?>