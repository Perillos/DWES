<?php
include "head.php";

?>

<body>
    <form name="subir" method="post" action="mostrar.php">
        <div>
            <label for="name">Nombre:</label>
            <input name="name" type="text" id="name" placeholder="Antonio" required autofocus>
        </div>
        <div>
            <label for="apellido1">Apellido 1:</label>
            <input name="apellido1" type="text" id="apellido1" placeholder="Lopez" required>
        </div>
        <div>
            <label for="apellido2">Apellido 2:</label>
            <input name="apellido2" type="text" id="apellido2" placeholder="Garcia" required>
        </div>

        <div>
            <label for="email">E-Mail:</label>
            <input name="email" type="email" id="email" placeholder="antonio@gnial.com" required>
        </div>

        <div>
            <label for="url">URL (página personal):</label>
            <input name="url" type="url" id="url" placeholder="http://miweb.es" required>
        </div>

        <div>
          <p>Sexo:</p>
          <div>
            <label for="m">
              <input name="sexo" type="radio" id="m" value="masculino" required>
              M
            </label>

          </div>
          <div>
            <label for="f">
              <input name="sexo" type="radio" id="f" value="femenino">
              F
            </label> 

          </div>
        </div>

        <div>
            <label for="convivientes">Número de convivientes en el domiciolio:</label>
            <input name="convivientes" type="number" id="convivientes" placeholder="5" required min="1" max="10" step="1">
        </div>

        <div>
            <p>Aficiones:</p>
            <label><input name="sport" type="checkbox" id="afic1" value="Tenis">Tenis</label>
            <label><input name="sport" type="checkbox" id="afic2" value="PinPon">PinPon</label>
            <label><input name="sport" type="checkbox" id="afic3" value="Padel">Padel</label>
            <label><input name="sport" type="checkbox" id="afic4" value="Squash">Squash</label>
        </div>



        <div>
          <label for="menu">Menú favorito:</label>
          <input name="menu" list="menu-value" id="menu">
          <datalist id="menu-value">
            <option value="Chocolate">
            <option value="Donnuts">
            <option value="Turrón">
            <option value="Helado">
          </datalist>
          
        </div>


        

        <div class="container">
            <input name="Enviar" value="Enviar datos" type="submit" class="button">
        </div>
    </form>
</body>

</html>
