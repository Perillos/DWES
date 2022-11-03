<?php

define("PRECIO_JUDIAS", 3.50);
$peso_judias = 1.21;
$coste_judias = PRECIO_JUDIAS * $peso_judias;

define("PRECIO_PATATAS", 0.40);
$peso_patatas = 1.73;
$coste_patatas = PRECIO_PATATAS * $peso_patatas;

define("PRECIO_TOMATES", 1.00);
$peso_tomates = 2.08;
$coste_tomates = PRECIO_TOMATES * $peso_tomates;

define("PRECIO_MANZANAS", 1.20);
$peso_manzanas = 2.15;
$coste_manzanas = PRECIO_MANZANAS * $peso_manzanas;

define("PRECIO_UVAS", 2.50);
$peso_uvas = 0.77;
$coste_uvas = PRECIO_UVAS * $peso_uvas;

$total = $coste_judias + $coste_patatas + $coste_tomates + $coste_manzanas + $coste_uvas;
?>

<table>
    <tr>
        <th>Producto</th>
        <th>Precio/kg</th>
        <th>Peso</th>
        <th>Precio Total</th>
    </tr>
    <tr>
        <td>Judías</td>
        <?php
        echo "
            <td>".number_format(PRECIO_JUDIAS, 2)."</td>
            <td>$peso_judias</td>
            <td>$coste_judias</td>
        ";
        ?>
    </tr>
    <tr>
        <td>Patatas</td>
        <?php
        echo "
            <td>".number_format(PRECIO_PATATAS, 2)."</td>
            <td>$peso_patatas</td>
            <td>$coste_patatas</td>
        ";
        ?>
    </tr>
    <tr>
        <td>Tomates</td>
        <?php
        echo "
            <td>".number_format(PRECIO_TOMATES, 2)."</td>
            <td>$peso_tomates</td>
            <td>$coste_tomates</td>
        ";
        ?>
    </tr>
    <tr>
        <td>Manzanas</td>
        <?php
        echo "
            <td>".number_format(PRECIO_MANZANAS, 2)."</td>
            <td>$peso_manzanas</td>
            <td>$coste_manzanas</td>
        ";
        ?>
    </tr>
    <tr>
        <td>Uvas</td>
        <?php
        echo "
            <td>".number_format(PRECIO_UVAS, 2)."</td>
            <td>$peso_uvas</td>
            <td>$coste_uvas</td>
        ";
        ?>
    </tr>
</table>
<p>Total: 
    <?php
    echo number_format($total, 2);
    ?>
    euros
</p>
<p>Gracias por su compra</p>