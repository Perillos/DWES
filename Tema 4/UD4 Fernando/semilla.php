<?php

include "head.php";
include "dbcone.php";

$arrayRow = [
    [
        'pchick0', 'wKC1hkFqLVh', 'Maï', '856241620-7', 'Mallard Plaza', 'Rybnoye', 'Alto del Espino', '696-962-9287', 'cgreenley0@seesaa.net'
    ],
    [
        'ebayle1', 'zC2o52m', 'Bérengère', '121657233-X', 'Sherman Lane', 'Inta', 'Cashel', '210-825-5194', 'edubble1@umich.edu'
    ],
    [
        'tcasseldine2', 'Wvrp48LZYI', 'Illustrée', '937464738-9', 'Atwood Court', 'Ji’an', 'Ko Samui', '443-278-2098', 'jfishly2@senate.gov'
    ],
    [
        'bfeathersby3', 'JbsyQWJc1IJ', 'Yè', '574880877-3', 'Sutteridge Parkway', 'Czerniewice', 'Sainte-Marthe', '412-212-0061', 'jdanilishin3@nbcnews.com'
    ],
    [
        'pknowlman5', 'C96jFwvCv', 'Maëline', '404231294-2', 'Grayhawk Cross', 'Avignon', 'Paraćin', '964-838-2782', 'bewells5@hubpages.com'
    ]
];

echo "<h1>Datos Eliminados</h1>";

echo "<table border>";

echo "
        <tr>
            <td>DNI</td>
            <td>Nombre</td>
            <td>Dirección</td>
            <td>Localidad</td>
            <td>Provincia</td>
            <td>Teléfono</td>
            <td>Correo electrónico</td>
        </tr>
    ";

$sql = "SELECT  * FROM usuarios WHERE type = 'user'";
$resulSel = $link->prepare($sql);
$resulSel->execute();

$sql = "DELETE FROM clientesdwes.usuarios WHERE type = 'user'";
$resulDel = $link->prepare($sql);
$resulDel->execute();

while ($row = $resulSel->fetch()) {
    echo "
            <tr>
                <td>$row[5]</td>
                <td>$row[4]</td>
                <td>$row[6]</td>
                <td>$row[7]</td>
                <td>$row[8]</td>
                <td>$row[9]</td>
                <td>$row[10]</td>
            </tr>
        ";
} 
echo "</table>";
echo "<h1>Datos Creados</h1>";

echo "<table border>";

echo "
        <tr>
            <td>DNI</td>
            <td>Nombre</td>
            <td>Usuario</td>
            <td>Clave</td>
        </tr>
    ";












foreach ($arrayRow as $row) {
    $DNI=$row[3];
    $USE=$row[0];
    $KEY=$row[1];
    $KEYHAS = password_hash($KEY, PASSWORD_DEFAULT);
    $NOM=$row[2];
    $DIR=$row[4];
    $LOC=$row[5];
    $PRO=$row[6];
    $TEL=$row[7];
    $MAIL=$row[8];

    
    $sql = "INSERT INTO clientesdwes.usuarios (DNI, usuario, clave, type, Nombre, Dirección, Localidad, Provincia, Telefono, email) VALUES ('$DNI', '$USE', '$KEYHAS', 'user', '$NOM', '$DIR', '$LOC', '$PRO', '$TEL', '$MAIL')";
    $insertar = $link->prepare($sql);
    $insertar->execute();


    echo "
        <tr>
            <td>$DNI</td>
            <td>$NOM</td>
            <td>$USE</td>
            <td>$KEY</td>
            
        </tr>
    ";
    
}

echo "</table>";




?>