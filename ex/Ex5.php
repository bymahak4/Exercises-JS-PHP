<?php
/*
    Imprimir por pantalla tabla de multiplicar del
    número pasado en u parámetro GET por la URL.
*/
// ---------------------------------------------------------------------
/*
if(isset($_GET["numero"]) && is_numeric($_GET["numero"])){
    $numero = $_GET["numero"];
}else{
    $numero = 5;
    echo "Número por defecto";
}
*/

//isset($_GET["numero"]) && is_numeric($_GET["numero"]) ? $numero = $_GET["numero"] : FALSE;

echo (!isset($_GET["numero"]) && !is_numeric($_GET["numero"])) ? 
    'Número por defecto '.$numero=1 :
    'Número colcado '.$numero = $_GET["numero"];

echo "<h2>Tabla de multiplicar de ".$numero."</h2>";

for($i=1;$i<=10; $i++){
    echo $i." X ".$numero." = ".($i*$numero)."<br/>";
}
?>