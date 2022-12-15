<?php

function not_empy ($empyText, $text) {
    if(!$empyText) {
      header("Location: index.php?error=El campo $text es incorrecto");
    }
    return $empyText;   
}


function check_email ($checkEmail) {
  
  $posicion_arroba = strpos($checkEmail, "@");
  $posicion_punto = strpos($checkEmail, ".", $posicion_arroba);
  
  if ($posicion_arroba && !$posicion_punto) {
    header("Location: index.php?error=El email es incorrecto");
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
    $error[] = "No se han seleccionado aficiones";
    return $error;

}

// isset($_POST["sport"]) ? $sport = select_sport($_POST["sport"]) : $sport = "No se han seleccionado aficiones";
