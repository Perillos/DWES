<?php

include("head.php");
session_start();


?>


  <body>
  <form method="post" action="formulario2.php">

        <div>
            <label for="name">Nombre y Apellidos:</label>
            <input name="name" type="text" id="name" placeholder="Antonio Garcia Lopez">
        </div>

        <div>
            <label for="email">Email:</label>
            <input name="email" type="email" id="email" placeholder="antonio@gnial.com">
        </div>

        <div>
            <label for="url">URL:</label>
            <input name="url" type="text" id="url" placeholder="dominio.es">
        </div>

        <div>
            <p>Sexo:</p>
                <div>
                    <input name="sex" type="radio" id="mas" value="masculino" checked>
                    <label for="mas">Masculino</label>
                </div>
                <div>
                    <input name="sex" type="radio" id="fem" value="femenino">
                    <label for="fem">Femenino</label>
                </div>
        </div>

        <div>
            <label for="nconv">Nª convivientes:</label>
            <input name="nconv" type="text" id="nconv" placeholder="4">
        </div>

        <div>
            <p>Aficiones:</p>
            <input name="aficiones[]" type="checkbox" id="tenis" value="tenis">
            <label for="tenis">Tenis</label>
            <input name="aficiones[]" type="checkbox" id="futbol" value="futbol">
            <label for="futbol">Futbol</label>
            <input name="aficiones[]" type="checkbox" id="pinpon" value="pinpon">
            <label for="pinpon">Pinpon</label>
            <input name="aficiones[]" type="checkbox" id="padel" value="padel">
            <label for="padel">Padel</label>
        </div>

        <div>
            <label>Menú favorito:</label>
            <select name="menu">
                <option value="lentejas">Lentejas</option>
                <option value="paella">Paella</option>
                <option value="cocido">Cocido</option>
                <option value="costra">Costra</option>
            </select>
        </div>

        <div class="container">
            <input name="Enviar" value="Enviar datos" type="submit" class="button"><br>
        </div>
    </form>
  </body>
</html>
