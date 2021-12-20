<?php
/* 
    Escribir un script de PHP que tome por parámetros GET 3 valores:
        • Numero1.
        • Operacion.
        • Numero2.

    “Numero1” y “Numero2” serán utilizados para realizar operaciones matemáticas, y el
    parámetro “Operación” indicara que operación matemática realizar entre los dos números,
    correspondiendo a:
        • sum -> Suma
        • res -> Resta
        • mul -> Multiplicación
        • div -> División
        • cuad -> Cuadrado de numero1 solamente

    El resultado se debe mostrar de forma que ponga los números, y la operación y el resultado.
    Por ejemplo, numer1=2&numero2=10&operacion=mul, debería mostrar como resultado
    “2x10=20”.
*/
	function realizarSuma($primerSumando, $segundoSumando){
		return $primerSumando + $segundoSumando;
	}

	function realizarResta($minuendo, $sustraendo){
		return $minuendo - $sustraendo;
	}

	function realizarMultiplicacion($multiplicando, $multiplicador){
		return $multiplicando * $multiplicador;
	}

	function realizarDivision($dividendo, $divisor){
		return $dividendo / $divisor;
	}

	function realizarRaizCuadrada($base){
		return $base * $base;
	}

	$numero1 	= $_GET['numero1'];
	$numero2 	= $_GET['numero2'];
	$operador 	= $_GET['operador'];

	if($operador === 'sum')  echo "$numero1 + $numero2 	= " . realizarSuma($numero1,$numero2);
	if($operador === 'res')  echo "$numero1 - $numero2 	= " . realizarResta($numero1,$numero2);
	if($operador === 'mul')  echo "$numero1 x $numero2 	= " . realizarMultiplicacion($numero1,$numero2);
	if($operador === 'div')  echo "$numero1 / $numero2 	= " . realizarDivision($numero1,$numero2);
	if($operador === 'cuad') echo "$numero1 ^2 			= " . realizarRaizCuadrada($numero1);

?>
<h4>Colocar en URL: numero1, numero2, operador</h4>
<ul>
	<li>sum</li>
	<li>res</li>
	<li>mul</li>
	<li>div</li>
	<li>cuad</li>
</ul>