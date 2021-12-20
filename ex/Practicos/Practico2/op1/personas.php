<?php

$personas = array(
        array("nombre" => "Juan",       "apellido" => "Perez",      "edad"  => 32, "mail" => "xxx@xxx.com"),
        array("nombre" => "Miguel",     "apellido" => "Silva",      "edad"  => 42, "mail" => "zzz@xxx.com"), 
        array("nombre" => "Adriana",    "apellido" => "Gonzalez",   "edad"  => 33, "mail" => "qqq@xxx.com"),
        array("nombre" => "Elena",      "apellido" => "Rodriguez",  "edad"  => 46, "mail" => "aaa@xxx.com"),
        array("nombre" => "Marcelo",    "apellido" => "Pereira",    "edad"  => 43, "mail" => "sss@xxx.com"),
        array("nombre" => "Rodrigo",    "apellido" => "Perez",      "edad"  => 30, "mail" => "lll@xxx.com"),
        array("nombre" => "Javier",     "apellido" => "Alvez",      "edad"  => 32, "mail" => "hhh@xxx.com"),
        array("nombre" => "Claudia",    "apellido" => "Vallejo",    "edad"  => 32, "mail" => "uuu@xxx.com"),
        array("nombre" => "Roberto",    "apellido" => "Gomez",      "edad"  => 48, "mail" => "ppp@xxx.com"),
        array("nombre" => "Jose",       "apellido" => "Paz",        "edad"  => 37, "mail" => "eee@xxx.com")
);

function mostrar_personas(){
    
    global $personas;
    $indice = 0;
    
    echo "<h2>Lista de personas</h2><ul>";
    while($indice <= (count($personas) - 1)){
        echo "<li><h3><a href=datos.php?index=$indice>".$personas[$indice]["nombre"]." ".$personas[$indice]["apellido"]."</a></h3></li>";
        $indice++;
    }
    echo "</ul>"; 
}

function mostrar_datos(){

    global $personas;

    echo "<h2>".$personas[$_GET["index"]]["nombre"]." ".$personas[$_GET["index"]]["apellido"]."</h2>";
    echo "<strong>EDAD: </strong>".$personas[$_GET["index"]]["edad"]."<br><br>";
    echo "<strong>E-MAIL: </strong>".$personas[$_GET["index"]]["mail"];
} 


?>
