<?php
/*
    Crear un array llamado meses y que almacene el 
    nombre de los doce meses del año.

    Recorrerlo con FOR para mostrar por pantalla los
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

for($i=0; $i<count($meses); $i++){
    echo $meses{$i}."<br/>";
}

?>