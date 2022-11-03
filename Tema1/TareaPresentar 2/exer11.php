<?php
define("PRECIO_JUDIAS", 3.50);
define("PRECIO_PATATAS", 0.40);
define("PRECIO_TOMATES", 1.00);
define("PRECIO_MANZANAS", 1.20);
define("PRECIO_UVAS", 2.50);
$fruta = "Judías";
switch ($fruta) {
    case "Judías":
        echo "El precio del kilo de las Judías es " . PRECIO_JUDIAS;
        break;
    case "Patatas":
        echo "El precio del kilo de las Patatas es " . PRECIO_PATATAS;
        break;
    case "Tomates":
        echo "El precio del kilo de las Tomates es " . PRECIO_TOMATES;
        break;
    case "Manzanas":
        echo "El precio del kilo de las Manzanas es " . PRECIO_MANZANAS;
        break;
    case "Uvas":
        echo "El precio del kilo de las Uvas es " . PRECIO_UVAS;
        break;
    default:
        echo "No quedan existencias de esta fruta " . $fruta;
        break;
}
?>