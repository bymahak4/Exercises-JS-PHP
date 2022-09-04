<?php 
/* 
    Crear un archivo llamado “personas.php” el cual definirá un array con 10 personas con los datos
    id, nombre, apellido, edad y correo electrónico.

    Luego, se deberá crear un archivo llamado “index.php” el cual mostrará una lista de las 10
    personas (solamente nombre y apellido) en formato de enlace.

    Al cliquear el enlace deberá ir a un archivo llamado “datos.php” el cual mostrará todos los
    datos de la persona seleccionada en el archivo anterior.
    
    Nota: ambos archivos deberán incluir el archivo “personas.php” para que accedan al mismo
    array de personas sin tener que definirlo en cada uno.
*/
    require 'personas.php';

    foreach($personas as $p){
        echo "<a href='/Practicos/Practico2/op2/datos.php?id={$p['id']}'> {$p['nombre']} {$p['apellido']} </a> <br>";
    }