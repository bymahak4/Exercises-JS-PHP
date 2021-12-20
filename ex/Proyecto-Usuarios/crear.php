<?php
/*  
    Crear un formulario HTML con los siguientes campos:
        - Nombre
        - Apellidos
        - Biografía
        - Email
        - Imagen
        - Contraseña
        - Rol
*/
/* 
    Recoger los datos de las variables POST y mostrarlo 
    por pantalla en el caso de que existan y no estén
    vacíos.
*/
/* 
    VALIDAR FORMULARIO.
*/

include 'includes/header.php';

?>

<h2>Crear Usuarios</h2>
<form action="recibir.php" method="POST">
    <label for="name"> Nombre:
        <input type="text" name="name" class="form-control" />
    </label><br/>

    <label for="surname">Apellido:
        <input type="text" name="surname" class="form-control" />
    </label><br/>
    
    <label for="biografia">Biografía:
        <textarea name="biografia" class="form-control"></textarea>
    </label><br/>

    <label for="email">Email:
        <input type="email" name="email" class="form-control" />
    </label><br/>

    <label for="image">Imagen:
        <input type="file" name="image" class="form-control" />
    </label><br/>

    <label for="password">Password:
        <input type="password" name="password" class="form-control" />
    </label><br/>

    <label for="role">Rol:
        <select name="role" class="form-control">
            <option value="0">Normal</option>
            <option value="1">Administrador</option>
        </select>
    </label><br/>

    <input type="submit" value="Enviar" class="btn btn-success">
</form>


<?php include 'includes/footer.php' ?>