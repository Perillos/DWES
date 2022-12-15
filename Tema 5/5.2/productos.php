<?php
include("conectar_bd.php"); ?>
<table border="1">
<tr>
<td>id</td>
<td>nombre</td>
<td>tipo</td>
<td>descripcion</td>
<td>precio</td>
<td>imagen</td>
</tr>
<?php
$stmt = $con->prepare("SELECT * FROM productos");
$stmt->execute();
while($fila = $stmt->fetch()) {
echo "<tr>";
echo "<td>{$fila["id"]}</td>";
echo "<td>{$fila["nombre"]}</td>";
echo "<td>{$fila["tipo"]}</td>";
echo "<td>{$fila["descripcion"]}</td>";
echo "<td>{$fila["precio"]}</td>";
echo "<td><img src='{$fila['imagen']}' width='95' height='95'></td>";
echo "</tr>";
}
?>
</table>