<?php

include 'head.php';

?>
<script src="js/app.js" defer></script>

<form id="formulario" name="form" method="post" action="add_producto.php" enctype="multipart/form-data">

  <h1>Añade una imagen y su tamaño</h1>

  <div>
    <label for="ancho">Tamaño Ancho:</label>
    <input name="ancho" type="number" id="ancho" placeholder="5" required min="1" max="100" step="1">

  </div>

  <div>
    <label for="alto">Tamaño Alto:</label>
    <input name="alto" type="number" id="alto" placeholder="5" required min="1" max="100" step="1">
  </div>

  <div>
    <label for="imagen">Inserta una imagen:</label>
    <input name="imagen" id="imagen" type="file" required></td>
  </div>

  <div>
    <input type="submit" name="enviar" value="Enviar" class="button">
    <!-- Solucionado TOCK resetear formulario. Este boton te pregunta antes si quieres borrar el formulario -->
    <input name="borrar" type="reset" id="borrar" value="Borrar formulario" class="button rojo">
  </div>


</form>