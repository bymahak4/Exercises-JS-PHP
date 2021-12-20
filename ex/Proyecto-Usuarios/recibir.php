<?php
if(isset($_POST)){
    // echo "<pre>", var_dump($_POST), "</pre>";
    if(!empty($_POST["name"]) && strlen($_POST["name"])<=20 
        && !is_numeric($_POST["name"]) 
        && !preg_match("/[0-9]/", $_POST["name"])){
            echo $_POST["name"]."<br/>";
    }
    if(!empty($_POST["surname"]) && !is_numeric($_POST["surname"]) 
        && !preg_match("/[0-9]/", $_POST["surname"])){
            echo $_POST["surname"]."<br/>";
    }
    if(!empty($_POST["biografia"])){
        echo $_POST["biografia"]."<br/>";
    }
    if(!empty($_POST["email"]) && filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)){
        echo $_POST["email"]."<br/>";
    }
    if(!empty($_POST["password"]) && strlen($_POST["password"])>=6){
        // sha1 es para que muestre la contraseña cifrada
        echo sha1($_POST["password"])."<br/>";
    }
    if(!empty($_POST["role"])){
        echo $_POST["role"]."<br/>";
    }
    if($_FILES["image"] && !empty($_FILES["image"]["tmp_name"])){
        echo "Imagen OK";
    }
}
?>