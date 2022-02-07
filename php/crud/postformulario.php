<?php
    $sexo = $_REQUEST['sexo'];
    $roles = $_REQUEST['roles'];
    echo "El sexo del usuario es $sexo <br>";
    echo "<p><b>Roles: </b></p>";
    echo "<ul>";
    foreach ($roles as $rol) {
        echo "<li>$rol</li>";
    }
    echo "</ul>";
    
?>