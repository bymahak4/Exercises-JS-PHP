<?php
/*  
    Utiliza la función filter_var para comprobar si el
    email que nos llega por la URL es un email valido.
*/

function validateEmail($email){
    if(!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)){
        $status = "Valido";
    }else{
        $status = "No valido";
    }
    return $status;
}

$email = "";
if(isset($_GET["email"])){
    $email = $_GET["email"];
}

echo validateEmail($email);

?>