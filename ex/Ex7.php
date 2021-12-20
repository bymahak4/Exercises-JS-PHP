<?php
/*
    Crear un array llamado meses y que almacene el 
    nombre de los doce meses del año.
    
    Recorrerlo con el bucle FOREACH para mostrar por pantalla los
    doce meses.
*/

$meses = array(
    "Enero",
    "Febrero",
    "Marzo",
    "Abril",
    "mayo",
    "Junio",
    "Julio",
    "Agosto",
    "Septiembre",
    "Octubre",
    "Noviembre",
    "Diciembre",
);

echo "Cantidad de meses: ".count($meses)."<br/><hr>";

foreach($meses as $mes){
    echo $mes."<br/>";
}

?>