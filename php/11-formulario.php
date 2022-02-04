<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="11-formulario.php" method="GET">
    <p>Sexo</p>
    <label>
        <input type="radio" name="sexo" value="Masculino">
        Masculino:
    </label>
    <br>
    <label>
        <input type="radio" name="sexo" value="Femenino">
        Femenino:
    </label>
    <br>
    <button type="submit">Enviar</button>
    


    </form>
    <?php
    $sexo = $_REQUEST['sexo'];
    echo "El sexo del usuario es $sexo <br>";

    ?>
</body>
</html>