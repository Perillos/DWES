<?php
// continuamos con la sesión
session_start();
$_SESSION = array();
session_destroy();

include "head.php";
?>

<body>
<h2>Gracias por su visita</h2>
<a href="login.php" class="button">Login</a>
</body>
</html>