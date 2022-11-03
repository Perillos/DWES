<?php
$earthRad = 6378;
$earthSun = 150000000;


echo "<p>El planeta Tierra tiene un radio de $earthRad km y su distancia al Sol es de $earthSun km</p>";

$pi = 3.14;

echo("<p>Distancia de una vuelta al mundo siguiendo el ecuador " . 2*$pi*$earthRad . " km.</p>");
echo("<p>Equivalencia de vueltas al mundo entre su distancia al Sol " . number_format($earthSun/(2*$pi*$earthRad), 2) . " veces.</p>");
?>