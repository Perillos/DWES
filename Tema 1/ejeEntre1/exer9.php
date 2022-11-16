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



if (1.5 > PRECIO_JUDIAS) {
    echo "Judias <br>";
    }
if (1.5 > PRECIO_PATATAS) {
    echo "Patatas <br>";
    }
if (1.5 > PRECIO_TOMATES) {
    echo "Tomates <br>";
    }
if (1.5 > PRECIO_MANZANAS) {
    echo "Manzanas <br>";
    }
if (1.5 > PRECIO_UVAS) {
    echo "Uvas <br>";
    }
?>