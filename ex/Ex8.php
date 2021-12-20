<?php
/*
    Escribir un programa que calcule el factorial de 
    cualquier número almacenado en una variable.

    El factorial de un número entero N es una operacion matemática que 
    consiste en multiplicar todos los factores N x (N-1)x(N-2)x ... x 1.

    Así, el factorial de 5 (escrito como 5!) es 
    igual a: 5! = 5 x 4 x 3 x 2 x 1 = 120
*/

$factorial = 1;
$numero = 5;

for($cont=1; $cont <= $numero; $cont++){
    // $factorial = $fatorial * $cont;
    $factorial *= $cont;
}

echo "El factorial de ".$numero." es ".$factorial;

?>