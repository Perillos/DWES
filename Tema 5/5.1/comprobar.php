<?php

function not_empy ($empyText, $text) {
    if(!$empyText) {
        $error = "Debes escribir un $text, vuelve al formulario <a href= \"index.html\">aquí</a>";
        return $error;
    }
    return $empyText;   
}


function check_email ($checkEmail) {

    $posicion_arroba = strpos($checkEmail, "@");
    $posicion_punto = strpos($checkEmail, ".", $posicion_arroba);

    if (!$posicion_arroba && !$posicion_punto) {
        $error = "Debes escribir un Email correcto, vuelve al formulario <a href= \"/exer19/actividades.html\">aquí</a>";
        return $error;
    }
    return $checkEmail;
}


function check_url ($checkUrl) {

  $posicion_punto = strpos($checkUrl, ".");

  if (!$posicion_punto) {
      $error = "Debes escribir una url correcto, vuelve al formulario <a href= \"/exer19/actividades.html\">aquí</a>";
      return $error;
  }
  return $checkUrl;
}

function empy_sex ($empySex) {
    if($empySex) {
        return $empySex;
    }
    $error = "Debes elegir un sexo, vuelve al formulario <a href= \"/exer19/actividades.html\">aquí</a>";
    return $error;
}

function select_sport ($selectSport) {
    if($selectSport) {
        return $selectSport;
    }
    $error = "No se han seleccionado aficiones";
    return $error;

}





?>