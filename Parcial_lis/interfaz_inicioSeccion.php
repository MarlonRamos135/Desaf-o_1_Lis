<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TextilExport</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body background="imagenes/morocco.png">


    <header>
        <nav class="navbar navbar-dark bg-black">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-4">
                        <a class="navbar-brand fs-3 text-white"><b>TextilExport</b></a>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <hr>
    <br>

    <div class="container d-flex justify-content-center align-items-center">
        <div class="col-md-4"> 
            <form action="identificacion_login.php" method="POST" class="text-center">
                <h1 class="text-warning fw-bold mb-4"><b style="color: navy;">Bienvenid@s</b></h1>
                <div style="text-align: center;">
                    <img style="width: 180px;height: auto;" src="https://i.pinimg.com/736x/3a/59/f1/3a59f13bbe775518072832cb0f308aa0.jpg" class="rounded-circle" alt="icono">
                </div>
                <div class="mb-3 text-start">
                    <label for="Nombre_usuario" class="form-label"><b style="color: black;">Nombre del Usuario</b></label>
                    <input type="text" class="form-control" name="Nombre_usuario" id="Nombre_usuario">
                </div>

                <div class="mb-3 text-start">
                    <label for="Contraseña" class="form-label"><b style="color: black;">Contraseña</b></label>
                    <input type="password" class="form-control" id="Contraseña" name="Contraseña">
                </div>

                <button type="submit" style="background-color: navy;" class="btn text-white w-100"><b style="color: white;">Ingresar</b></button>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
