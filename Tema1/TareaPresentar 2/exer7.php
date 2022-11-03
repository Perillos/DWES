<?php
$earthRad = 6378;
$earthSun = 150000000;
$earthSunMK = $earthSun / 1000000;


echo "<p>El planeta Tierra tiene un radio de $earthRad km y su distancia al Sol es de $earthSunMK millones de km</p>";

$pi = 3.14;

echo("<p>Longitud de una vuelta al mundo siguiendo el ecuador " . 2*$pi*$earthRad . " km.</p>");
echo("<p>La equivalencia entre la distancia de la Tierra al Sol y la vueltas al mundo es de " . number_format($earthSun/(2*$pi*$earthRad), 2) . " veces.</p>");
//echo("<p>" . number_format($earthSun/(2*$pi*$earthRad), 2) . " son las vueltas al mundo que equivale la distancia entre la Tierra y el Sol.</p>");


?>