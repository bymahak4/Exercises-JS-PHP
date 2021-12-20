<?php
/*  EX 19
    Utiliza los includes de PHP para tener una estructura
    html básica y separar el código por el header, body y
    footer.
*/
include 'includes/header.php';
?>

<p>Texto del body en el index</p>
<ul>
    <li><a href="contacto.php">Contacto</a></li>
    <li><a href="crear.php">Crear usuario</a></li>
</ul>

<?php
include 'includes/footer.php';
?>
