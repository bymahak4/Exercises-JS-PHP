<?php
/*
    Escribe un programa que muestre la dirección IP del
    usuario que visita nuestra web y si usa Firefox
    mostrarle un texto.
*/

$ip = $_SERVER["REMOTE_ADDR"];
$browser = $_SERVER["HTTP_USER_AGENT"];

echo "Tu IP es ".$ip;

if(strstr($browser, "Firefox") == TRUE) {
    echo "<h2>El navegador que utilizas es Firefox</h2>";
}else{
    echo "<h3>No usas Firefox</h3>";
}

?>