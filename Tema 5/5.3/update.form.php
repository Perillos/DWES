<?php
include "seguridad.php";
include "dbconnect.php";
include "head.php";


$value = $_GET['id'];

$sql = "SELECT  * FROM users WHERE id = '$value'";

$result = $link->prepare($sql);
$result->execute();
$array1 = $result->fetch();

?>
<body>
    <form method="post" action="update.controler.php?id=<?php echo $value; ?>">
        <div>
            <label for="id">Nº Cliente:</label>
            <input name="id" type="text" id="id" disabled value="<?php
            echo $array1[0]; ?>">
        </div>
        <div>
            <label for="user">Usuario</label>
            <input name="user" type="text" id="user" disabled value="<?php
            echo $array1[1]; ?>">
        </div>

        <div>
            <label for="nif">DNI:</label>
            <input name="nif" type="text" id="nif" placeholder="73895197Z" value="<?php
            echo $array1[5]; ?>">
        </div>

        <input type="text" hidden>
        <div>
            <label for="name">Nombre:</label>
            <input name="name" type="text" id="name" placeholder="Antonio" value="<?php
            echo $array1[4]; ?>">
        </div>

        <div>
            <label for="adress">Dirección:</label>
            <input name="adress" type="text" id="adress" placeholder="C/ Soto del real, 4"  value="<?php
            echo $array1[6]; ?>">
        </div>

        <div>
            <label for="local">Localidad:</label>
            <input name="local" type="text" id="local" placeholder="Elche"  value="<?php
            echo $array1[7]; ?>">
        </div>

        <div>
            <label for="prov">Provincia:</label>
            <input name="prov" type="text" id="prov" placeholder="Alicante"  value="<?php
            echo $array1[8]; ?>">
        </div>

        <div>
            <label for="phone">Teléfono:</label>
            <input name="phone" type="text" id="phone" placeholder="681793567"  value="<?php
            echo $array1[9]; ?>">
        </div>

        <div>
            <label for="email">Email:</label>
            <input name="email" type="email" id="email" placeholder="antonio@gnial.com"  value="<?php
            echo $array1[10]; ?>">
        </div>

        <div class="container">
            <input name="Enviar" value="Enviar datos" type="submit" class="button">
        </div>

        <!-- <input name="Borrar" value="Vaciar  campos" type="reset"> No lo pongo por que me genera TOC-->
    </form>




