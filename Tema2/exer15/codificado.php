<?php
include("cripto.php");

$text = $_REQUEST["phrase"];
$codeDisplace = $_REQUEST["displace"];
$codeText = encode_phrase($text, $codeDisplace);

echo ("<p>Frase: $text</p>");
echo ("<p>Frase codificada: $codeText</p>");

?>