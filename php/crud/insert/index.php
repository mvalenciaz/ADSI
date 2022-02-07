<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
    <link rel="stylesheet" href="./../css/bootstrap.min.css">
</head>

<body>
    <?php include_once "./../views/menu.php" ?>
    <div class="container">
        <?php
        if (isset($_GET['status'])) {
            $status = $_GET['status'];

            if ($status === "success") {
        ?>
                <div class="row">
                    <div class="alert alert-success" role="alert">
                        Contacto almacenado 
                    </div>
                </div>
        <?php
            }
        }
        ?>
        <div class="row">
            <div class="card col-8 mt-5 mx-auto">
                <form action="./save.php" method="POST" class="card-body">
                    <h1 class="card-title">Insert (Crear)</h1>
                    <div class="col-12">
                        <label for="nombre" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingresa tu nombre..." required>
                    </div>
                    <div class="col-12">
                        <label for="telefono" class="form-label">Teléfono</label>
                        <input type="tel" class="form-control" id="telefono" name="telefono" placeholder="Ingresa tu teléfono..." required>
                    </div>
                    <div class="col-12">
                        <label for="correo" class="form-label">correo electrónico</label>
                        <input type="email" class="form-control" id="correo" name="correo" placeholder="Ingresa tu correo electrónico..." required>
                    </div>
                    <button class="btn btn-primary col-12 mt-3">Guardar</button>
                </form>
            </div>
        </div>
    </div>
    <script src="./../js/bootstrap.min.js"></script>
</body>

</html>