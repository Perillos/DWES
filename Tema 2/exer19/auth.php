<?php

function empy_name ($empyName) {
    if(!$empyName) {
        $error = "Debes escribir un Nombre, vuelve al formulario <a href= \"/exer19/actividades.html\">aquí</a>";
        return $error;
    }
    return $empyName;   
}

function empy_surName ($empySurName) {
    if(!$empySurName) {
        $error = "Debes escribir un Apellido, vuelve al formulario <a href= \"/exer19/actividades.html\">aquí</a>";
        return $error;
    }
    return $empySurName;
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

function select_sport ($selectSport) {
    if($selectSport) {
        return $selectSport;
    }
    $error = "Debes seleccionar un deporte, vuelve al formulario <a href= \"/exer19/actividades.html\">aquí</a>";
    return $error;

}

function empy_sex ($empySex) {
    if($empySex) {
        return $empySex;
    }
    $error = "Debes elegir un sexo, vuelve al formulario <a href= \"/exer19/actividades.html\">aquí</a>";
    return $error;
}

function select_drive ($selectDrive) {
    if($selectDrive == "") {
        $selectDrive = "No";
        return $selectDrive;
    }
    $selectDrive = "Si";
    return $selectDrive;
}





function empy_file ($temporary, $destiny) {
    if (move_uploaded_file($temporary, $destiny)) {
        $move = "Archivo subido con éxito";
        return $move;
    } else {
        $error = "Ocurrió un error, no se ha podido subir el archivo, vuelve al formulario <a href= \"/exer19/actividades.html\">aquí</a>";
        return $error;
    }
}

function empy_hobby ($empyHobby) {
    if(!$empyHobby) {
        $error = "Debes escribir Aficiones, vuelve al formulario <a href= \"/exer19/actividades.html\">aquí</a>";
        return $error;
    }
    return $empyHobby;
}



?>