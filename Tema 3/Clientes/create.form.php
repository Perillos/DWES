<?php

include("head.php");



?>

<body>
    <form method="post" action="create.controler.php">
        <div>
            <label for="nif">DNI:</label>
            <input name="nif" type="text" id="nif" placeholder="73895197Z">
        </div>

        <div>
            <label for="name">Nombre:</label>
            <input name="name" type="text" id="name" placeholder="Antonio">
        </div>

        <div>
            <label for="adress">Dirección:</label>
            <input name="adress" type="text" id="adress" placeholder="C/ Soto del real, 4">
        </div>

        <div>
            <label for="local">Localidad:</label>
            <input name="local" type="text" id="local" placeholder="Elche">
        </div>

        <div>
            <label for="prov">Provincia:</label>
            <input name="prov" type="text" id="prov" placeholder="Alicante">
        </div>

        <div>
            <label for="phone">Teléfono:</label>
            <input name="phone" type="text" id="phone" placeholder="681793567">
        </div>

        <div>
            <label for="email">Email:</label>
            <input name="email" type="email" id="email" placeholder="antonio@gnial.com">
        </div>

        <div class="container">
            <input name="Enviar" value="Enviar datos" type="submit" class="button"><br>
        </div>

        <!-- <input name="Borrar" value="Vaciar  campos" type="reset"> No lo pongo por que me genera TOC-->
    </form>
</body>

</html>

