<?php

$ancho = isset($_POST['ancho']) ? $_POST['ancho']: '';
$alto = isset($_POST['alto']) ? $_POST['alto']: '';

// function comprobar () {

// }




$nombre_archivo = $_FILES['imagen']['name'];
$ruta = "images/" . $nombre_archivo;
$temp = $_FILES['imagen']['tmp_name'];
print( $_FILES['imagen']['type']);

var_dump(GetImageSize($nombre_archivo));



// list($ancho, $alto, $tipos, $atributos) = getimagesize($temp);
// echo "Ancho de archivo: " . $ancho . "<br>";
// echo "Alto de imagen: " . $alto . "<br>";
// echo "Tipo :" . $tipos . "<br>";
// echo "Atributos:" .$atributos;
// if (move_uploaded_file($temp,$ruta)) {

// echo '<div><b>Se ha subido correctamente la imagen.</b></div>';
//  //Mostramos la imagen subida
// echo '<p><img style="width:50px" src="Images/'.$nombre_archivo.'"></p>';
// $stmt = $con->prepare ("INSERT INTO productos(nombre,tipo,descripcion,precio,imagen) VALUES (:nombre, :tipo, :descripcion, :precio, :imagen)");
// if($stmt->execute(array(':nombre'=>$nombre, ':tipo'=>$tipo,
// ':descripcion'=>$descripcion, ':precio'=>$precio,':imagen'=>$ruta))) {
// echo "¡Registro creado satisfactoriamente!";
// }
// }
// else {
//  //Si no se ha podido subir la imagen, mostramos un mensaje de error
//  echo '<div><b>Ocurrió algún error al subir el fichero. No pudo
// guardarse.</b></div>';
//  }