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
        function suma(){
            echo '<h2>'.$_GET['numero1'].' + '.$_GET['numero2'].' = '.($_GET['numero1']+$_GET['numero2']).'</h2>';
        }
        function resta(){
            echo '<h2>'.$_GET['numero1'].' - '.$_GET['numero2'].' = '.($_GET['numero1']-$_GET['numero2']).'</h2>';
        }
        function multiplicaion(){
            echo '<h2>'.$_GET['numero1'].' X '.$_GET['numero2'].' = '.($_GET['numero1']*$_GET['numero2']).'</h2>';
        }
        function division(){
            echo '<h2>'.$_GET['numero1'].' / '.$_GET['numero2'].' = '.($_GET['numero1']/$_GET['numero2']).'</h2>';
        }
        function cuadrado(){
            echo '<h2>'.$_GET['numero1'].' ^2 = '.($_GET['numero1']*$_GET['numero1']).'</h2>';
        }
        
        function indicarOperacion(){
            if ($_GET['operador'] == "sum") {
                echo suma();  
            }
            elseif ($_GET['operador'] == "res") {
                echo resta();
            } 
            elseif ($_GET['operador'] == "mul") {
                echo multiplicaion();
            }
            elseif ($_GET['operador'] == "div") {
                echo division();
            }
            elseif ($_GET['operador'] == "cuad") {
                echo cuadrado();
            }
            else {
                echo "Operador incorrecto, por favor ingresar un operador valido.";
            }
        }

        echo '<h1>Calculadora Script<h1>';
?>
        
        <h4>Insertar en la URL: ?numero1= &numero2= &operador=</h4>
        <ul>
            <li>sum</li>
            <li>res</li>
            <li>mul</li>
            <li>div</li>
            <li>cuad</li>
        </ul>
<?php        
        if (isset($_GET['numero1']) && ($_GET['numero2']) && ($_GET['operador']) 
            || isset($_GET['numero1']) && ($_GET['operador'])) {
                indicarOperacion();
                //echo '<h1>'.$_GET['numero1'].'</h1>';
                //var_dump($_GET['operador']); 
        }
?>
       

       


    