<?php

include 'head.php';

// Comprueba que el archivo y los datos hayan llegado correctamente
$altura = isset($_POST['ancho']) ? $_POST['ancho'] : '';
if (isset($_FILES['imagen']) && isset($_POST['ancho']) && isset($_POST['alto'])) {
  // Almacena los datos en variables
  $anchura = $_POST['ancho'];
  $altura = $_POST['alto'];
  $archivo = $_FILES['imagen'];
} else {
  // Si no se han recibido todos los datos, muestra un mensaje de error
  echo "<h1>Error: no se han recibido todos los datos del formulario</h1>";
  // Boton para volver al formulario
  echo "
  <div class='container'>
      <a href='index.php' class='button'>Volver al formulario</a>
  </div>
";
}


// Valida el tipo de archivo
$tiposPermitidos = array("image/jpeg", "image/png", "image/gif");
if (!in_array($archivo['type'], $tiposPermitidos)) {
  // Si el tipo de archivo no es válido, muestra un mensaje de error y vuelve al formulario
  echo "<h1>Error: sólo se permiten archivos de imagen (JPEG, PNG o GIF)</h1>";
  // Boton para volver al formulario
  echo "
  <div class='container'>
      <a href='index.php' class='button'>Volver al formulario</a>
  </div>
";
}

// Valida el tamaño de la imagen
if ($archivo['size'] > 900000) {
  // Si el tamaño del archivo es mayor de 900KB, muestra un mensaje de error y vuelve al formulario
  echo "<h1>Error: el tamaño del archivo debe ser inferior a 900KB</h1>";
  echo "
  <div class='container'>
      <a href='index.php' class='button'>Volver al formulario</a>
  </div>
";
}

// Si el archivo es válido, lo mueve a la carpeta de imágenes
move_uploaded_file($archivo['tmp_name'], "images/" . $archivo['name']);

// Muestra la imagen con el tamaño indicado
echo '<img src="images/' . $archivo['name'] . '" width="' . $anchura . '" height="' . $altura . '">';

?>