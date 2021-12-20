<?php
/*
    Modifica el ejercicio anterior (Ejercicio 2) para que 
    muestre al lado de cada cuadrado si es número par o impar.
*/

for ($i=1; $i <=30; $i++){
    // variable cuadrado
    $cuadrado = $i*$i;

    echo "El cuadrado de ".$i." es ".$cuadrado;
    
    /*
        if ($cuadrado%2 == 0) {
            echo " y ES PAR";
        }else{
            echo " y ES IMPAR";
        }
    */
    
    echo ($cuadrado%2 == 0) ? " y ES PAR" : " y ES IMPAR";
    

    echo "<br/>";
}
?>