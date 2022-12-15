<form name="formadd" method="post" action="add_producto.php" enctype="multipart/form-data">
  <center>
    <table border=0 CELLPADDING=10>
      <tr><u style="color:red">
          <h1>Añade el producto</h1>
        </u></tr>
      <tr>
        <td width="200" height="50">Nombre: <input name="nombre" type="text" id="nombre" maxlength="255" size="40" ></td>
        <td width="200" height="50">Precio:<br>
          <input name="precio" id="precio" type="number" value="10.00" step="0.01" min="1" max="9999" size="50">
        </td>
      </tr>
      <tr>
        <td><SELECT style="width: 170;" NAME="tipo" id="tipo" required>
            <OPTGROUP LABEL="Tipo de producto">
              <option value="Camiseta" selected>Camiseta</option>
              <option value="Evento">Evento</option>
              <option value="Foto">Foto</option>
              <option value="Otros">Otros</option>
          </select><br></td>
        <td width="200" height="50"><INPUT name="imagen" id="imagen" TYPE="FILE" required></td>
      </tr>
      <tr>
        <td colspan=2><TEXTAREA placeholder="Añade una descripción obligatoriamente" name="descripcion" id="descripcion" ROWS=5 COLS=40 required></TEXTAREA></td>
      </tr>
      <tr>
        <td colspan=2 width="200" height="75"><input name="Borrar" value="Limpiar" type="reset">
          &nbsp;&nbsp;&nbsp;<input type="submit" name="enviar" value="Enviar"></td>
      </tr>
    </table>
</form>

