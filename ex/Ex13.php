<?php
/*
    Escribe un programa que añada valores a un array
    mientras que su longitud sea menor a 100 y después
    que se muestre la información del array por pantalla.
*/

$vector = array();

for($i=1; $i<=100; $i++){
    //array_push($vector, $i);
    $vector["numero-{$i}"] = $i;
}

var_dump($vector);

?>