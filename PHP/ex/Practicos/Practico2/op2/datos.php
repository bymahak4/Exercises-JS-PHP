<?php 
    require 'personas.php';

    function mostarPersona($persona){
        echo "ID: {$persona['id']} <br />";
        echo "Nombre: {$persona['nombre']} <br />";
        echo "Apellido: {$persona['apellido']} <br />";
        echo "Edad: {$persona['edad']} <br />";
        echo "Correo: {$persona['correoElectronico']}";
    }
    
    foreach($personas as $p){
        if($p['id'] === $_GET['id']){
            mostarPersona($p);
        }
    }