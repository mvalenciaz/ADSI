<?php

if (empty($_POST)) {
    header("location: ./index.php");
}

function save($name, $phone, $email)
{
    require_once "./../database/conexion.php";
    $query = "INSERT INTO contactos (nombre,telefono, email) VALUES ('$name','$phone','$email' )";
    $saved = mysqli_query($connection,$query);

    if ($saved) {
        header("location: ./index.php?status=success");
    }else {
        echo "Error insertando: ". mysqli_error($connection);
    }
}



$nombre = isset($_POST['nombre']) ? $_POST['nombre'] : "";
$telefono = $_POST['telefono'] ?? "";
$correo = $_POST['correo'] ?? "";

save($nombre,$telefono,$correo);
