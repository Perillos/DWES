<?php
include "./templates/head.php";
?>

<body>
    <h1>Acceso al sistema</h1>
    <form action="conexion.php" method="post">
        <div>
            <label for="user">Usuario:</label>
            <input name="user" type="text" id="user" placeholder="super">
        </div>
        
        <div>
            <label for="key">Clave:</label>
            <input name="key" type="password" id="key" placeholder="mega">
        </div>

        <div class="container">
            <input name="Enviar" value="Login" type="submit"  class="button"> 
        </div>
    </form>
    <div class="container">
        <a href='registrate.php' class='button'>Registrarse</a> 
    </div>
</body>
</html>