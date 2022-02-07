<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elementos de Formulario</title>
</head>
<body>
    <form action="" method="GET">
    <p><b>Sexo</b></p>
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
     
    <p><b>Roles</b></p>
     <label>
        <input type="checkbox" name="roles[]" value="Administrador">
        Administrador
    </label>

    <label>
        <input type="checkbox" name="roles[]" value="Editor">
        Editor
    </label>

    <label>
        <input type="checkbox" name="roles[]" value="Moderador">
        Moderador
    </label>
    <br>
    <label>
        Imagen
        <br>
        <input type="file" name="image">
    </label>
    <br>
    <button type="submit">Enviar</button>
    <br>
     </form>
    
    
    
</body>
</html>