<?php
    $sexo = $_REQUEST['sexo'];
    $roles = $_REQUEST['roles'];
    $imagen = $_FILES['image'];
    $path = $_SERVER['DOCUMENT_ROOT'] . '/ADSI/ADSI/php/imagenes'. '/'. $imagen['name'];
    
    echo "El sexo del usuario es $sexo <br>";
    echo "<p><b>Roles: </b></p>";
    echo "<ul>";
    foreach ($roles as $rol) {
        echo "<li>$rol</li>";
    }
    echo "</ul>";
    //var_dump($imagen);
    move_uploaded_file($imagen['tmp_name'], $path);
?>