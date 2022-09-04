<?php
/*
    Hacer un programa que tenga un array de 5 números 
    enteros y hacer lo siguiente con él:

        1. Recorrerlo y mostrarlo.
        2. Ordenarlo y mostrarlo.
        3. Mostrará su longitud.
        4. Buscar en el vector.
*/

$numeros = array(30,20,40,50,10);

echo "<h2>1. Recorrer y Mostrar</h2>";
foreach($numeros as $numero){
    echo $numero."<br/>";
}

echo "<h2>2. Ordenarlo y Mostrar</h2>";
// ordenar de forma acendente
sort($numeros);

// de forma decendente es rsort

foreach($numeros as $numero){
    echo   $numero."<br/>";
}

echo "<h2>3. Mostrará su longitud</h2>";
echo "<p>La longitud del array es de: ".count($numeros)."</p>";
// tambien se puede usar sizeof($numeros)

echo "<h2>4. Buscar en el vector</h2>";
if(!array_search(30, $numeros)) {
    echo "<p>El número no existe en el array</p>";
}else{
    echo "<p>El número existe en el array</p>";
}

?>