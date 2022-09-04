<?php
/*  
    Crea una función a la que le pases un número y 
    te muestre su tabla de multiplicar.
*/

function tabla($numero){
    $tabla = "";
    for($i=1; $i<=10; $i++){
        $cuenta = $i*$numero;
        $tabla .="{$i} x {$numero} = {$cuenta} <br/>";
    }
    return $tabla;
}

echo "<h1>Tablas De Multiplicar</h1>";

for($i=1; $i<=10; $i++){
    echo "<h3>Tabal del {$i}</h3>";
    echo tabla($i);
}

?>