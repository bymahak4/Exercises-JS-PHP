<?php
/*
    El cálculo del factorial se realiza en un bucle que va disminuyendo el 
    valor de una variable y multiplicando los valores entre sí, como
    ya vimos anteriormente.

    Aprovechando este patrón puede crear una función que realice la 
    fatorial del número que le pasemos por parámetro, ahorrando así
    líneas de código.
*/

function factorial($numero) {
    $resultado = 1;
    for($x=$numero; $x>0; $x--){
        $resultado *= $x;

    }
    return $resultado;
}

echo "<h2>El factorial</h2>";
$dato = 5;
echo "El factorial de ".$dato." es ".factorial($dato);