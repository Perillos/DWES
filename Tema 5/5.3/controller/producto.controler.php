<?php
include "../config/dbconnect.php";
include "../view/templates/head.php";



if (
        empty($_POST['nameproduct']) ||
        empty($_POST['priceproduct']) ||
        empty($_POST['typeproduct']) ||
        empty($_POST['descriptionproduct']) ||
        empty($_FILES['imagenproduct'])
    ) {
        echo "
            <h2>Debes rellenar todos los datos, vuelve al formulario</h2>
            <div class='container'>
                <a href='/view/registrate.php' class='button'>Volver</a>
            </div>
    ";
    die();
}


$nameproduct = $_POST['nameproduct'];
$priceproduct = $_POST['priceproduct'];
$categori = $_POST['typeproduct'];
$description = $_POST['descriptionproduct'];
$image = $_FILES['imagenproduct'];


// Valida el tipo de archivo
$tiposPermitidos = array("image/jpeg", "image/png", "image/gif");
if (!in_array($image['type'], $tiposPermitidos)) {
  echo "<h2>Error: sólo se permiten archivos de imagen (JPEG, PNG o GIF)</h2>";
  echo "
    <div class='container'>
        <a href='/view/newproduct.php' class='button'>Volver</a>
    </div>
  ";
  die();
}


// Valida el tamaño de la imagen
if ($image['size'] > 900000) {

  echo "<h2>Error: el tamaño del archivo debe ser inferior a 900KB</h2>";
  echo "
    <div class='container'>
      <a href='/view/newproduct.php' class='button'>Volver</a>
    </div>
  ";
  die();
}

move_uploaded_file($image['tmp_name'], "../build/img/" . $image['name']);
$load_img = "/build/img/".$image['name'];

$sql = "INSERT INTO products (name, description, categori, price, image) VALUES ('$nameproduct', '$description', '$categori', '$priceproduct', '$load_img')";
$insertar = $link->prepare($sql);
$insertar->execute();



if(!$insertar) {
  echo "<h2>Ha habido un error al insertar los datos. $my_error<h2>";
  echo "
  <div class='container'>
      <a href='/view/newproduct.php' class='button'>Volver</a>
  </div>
  ";
  die();
} else {
  echo "<h2>Los datos han sido introducidos satisfactoriamente</h2>";

  echo "<table border>";
  echo "
        <tr>
            <td>Nombre</td>
            <td>Categoría</td>
            <td>Precio</td>
            <td>Imagen</td>
        </tr>
    ";
  echo "
    <tr>
        <td>$nameproduct</td>
        <td>$categori</td>
        <td>$priceproduct €</td>
        <td><img src='$load_img'></td>
    </tr>
    ";
  echo "</table>";
  echo "
      <div class='container'>
          <a href='/index.php' class='button'>Ir al panel de registro</a>
      </div>
  ";
}



include "../view/templates/footer.php";
?>