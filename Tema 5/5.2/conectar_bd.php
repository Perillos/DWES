<?php
define ("USER_DB","root"); //esto para probar que funciona, nunca usar root
define ("PASSWORD","");
try {
$dsn = "mysql:host=localhost;dbname=empresa";
 $con = new PDO($dsn, USER_DB, PASSWORD);
 $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e){
 echo 'Error: '.$e->getMessage();
}
?>