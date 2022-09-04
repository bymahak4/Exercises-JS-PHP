<?php
/*  
    Modificar el ejercicio anterior para pasarle un 
    parámetro opcional que nos permita imprimir 
    directamente la tabala en HTML.
*/

function tabla($numero, $html = null){
    $tabla = "";
    if($html != null){}
    for($i=1; $i<=10; $i++){
        $cuenta = $i*$numero;
        $tabla .="{$i} x {$numero} = {$cuenta} <br/>";
    }
    if($html != null){
        // $tabla .="<h3>Tablas De {$numero}</h3>";
        echo"<h3>Tablas De {$numero}</h3>";
        echo $tabla;
    }
    return $tabla;
}

echo "<h1>Tablas De Multiplicar</h1>";

for($i=1; $i<=10; $i++){
    tabla($i, TRUE);
}


?>