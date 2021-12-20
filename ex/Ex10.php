<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 10</title>
</head>
<body>
    <?php if(isset($_GET["numero"]) && is_numeric($_GET["numero"])){?>
        <h1>Números multiplos de <?=$_GET["numero"];?></h1>
        <?php
        /*
            Mostrar los números multiplos de un número pasado
            por la URL que hay del 1 al 100.
        */

        for($i=1; $i<=100; $i++){
            if(isset($_GET["numero"]) && $i%$_GET["numero"]==0){
                echo $i." es multiplo de ".$_GET["numero"]."<br/>";
            }
        }
    }else{ ?>
        <p>Introduce un número correcto por la URL</p>
    <?php } ?>

      
</body>
</html>
