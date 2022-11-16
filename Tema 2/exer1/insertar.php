<?php


$text = $_REQUEST["nombre"];


function mostrar_impares ($argc) {
    
    for ($i = 0; $i < strlen($argc); $i++) {
        if ($i % 2 == 0) {
            echo $argc[$i] . "<br/>";
        }
    }
}

mostrar_impares($text);

?>