<?php

include 'head.php';

?>

<body>
<form id="formulario" name="form" method="post" action="upload.php" enctype="multipart/form-data">

  <h1>Añade una imagen y su tamaño</h1>

  <div>
    <label for="ancho">Tamaño Ancho:</label>
    <input name="ancho" type="number" id="ancho" placeholder="100" min="100" max="1000" step="1" require>

  </div>

  <div>
    <label for="alto">Tamaño Alto:</label>
    <input name="alto" type="number" id="alto" placeholder="100" min="100" max="1000" step="1" require>
  </div>

  <div>
    <label for="imagen">Inserta una imagen:</label>
    <input name="imagen" id="imagen" type="file" required accept="image/*"></td>
  </div>

  <div>
    <input type="submit" name="enviar" value="Enviar" class="button">
    <!-- Solucionado TOCK resetear formulario. Este botón te pregunta antes si quieres borrar el formulario -->
    <input name="borrar" type="reset" id="borrar" value="Borrar formulario" class="button rojo">
  </div>


</form>