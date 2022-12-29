<?php
include "../auth/seguridad.php";
include "./templates/head.php";


$type_user = $_SESSION['type_user'];
$user = $_SESSION['name_user'];

echo "
  <div class='container'>
    <h1>Hola $user</h1>
  </div
";

echo "
<div class='container'>
    <a href='panel.php' class='button'>Panel administración</a>
</div>
";

echo "
<div class='container'>
    <a href='products.php' class='button'>Productos</a>
</div>
";

echo "
<div class='container'>
    <a href='/auth/salir.php' class='button'>Cerrar session</a>
</div>
";





include "../view/templates/footer.php";
?>