<?php
/*
    Crear un script PHP que imprima trs variables, una tipo
    array, otra tipo string y otra boleana y que imprima
    un mensaje según el tipo de variable que sea.
*/

$matriz = array("hola", 2);
$verdadero = TRUE;
$texto = "Esto es un texto";

if (is_array($matriz) == TRUE){
    echo "<p>El array es un array.</p>";
}

if(is_bool($verdadero)){
    echo "<p>El booleano es un booleano.</p>";
}

if(is_string($texto)) {
    echo "<p>El string es un string.</p>";
}


?>