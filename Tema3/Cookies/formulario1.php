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
            <input name="email" type="text" id="email" placeholder="antonio@gnial.com">
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

        <div class="container">
            <input name="Enviar" value="Enviar datos" type="submit" class="button"><br>
        </div>
    </form>
  </body>
</html>
