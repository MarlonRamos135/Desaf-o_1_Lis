<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body background="imagenes/morocco.png">

   
    <header>
        <nav style="background-color:black;" class="navbar navbar-dark">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-4">
                        <a class="navbar-brand fs-3"><b style="color: white;">TextilExport<b></a>
                    </div>
                </div>
                <form class="d-flex">
                <a class="btn btn-outline-light" href="interfaz_inicioSeccion.php" type="submit"><b>Cerrar Sesión</b></a>
                </form>
            </div>
        </nav>
    </header>
    <br><br>
    <div style="text-align: center;"><img style="width: 198px;height: auto;" src="https://i.pinimg.com/736x/c7/9b/a1/c79ba1f4782ea81d2b71fd3325b08504.jpg" class="img-thumbnail" alt="admin"></div>
   

    <form action="agregar_producto.php" method="POST">
        <div class="container my-5">
            <div class="row">
                <div class="col-sm-4">
                    <label for="nombre" class="form-label"><b style="color: navy;background-color: white;">Nombre del Producto</b></label>
                    <input type="text" name="nombre" id="nombre" class="form-control">
                </div>
                <div class="col-sm-4">
                    <label for="desc" class="form-label"><b style="color: navy;background-color: white;">Descripción</b></label>
                    <input type="text" name="desc" class="form-control" id="desc">
                </div>
                <div class="col-sm-4">
                    <label for="precio" class="form-label"><b style="color: navy;background-color:white;">Precio del producto</b></label>
                    <input type="number" name="precio" id="precio" min="0" step="0.01" class="form-control">
                </div>  
            </div>
            <br><br>
            <div class="row">
                <div class="col-sm-4">
                    <label for="categoria" class="form-label"><b style="color:navy;background-color: white;">Categoría</b></label>
                    <select name="categoria" id="categoria" class="form-select">
                        <option value="Textil">Textil</option>
                        <option value="Promocional">Promocional</option>
                    </select>
                </div>
                <div class="col-sm-4">
                    <label for="img" class="form-label"><b style="color: navy; background-color: white;">Imagen (URL)</b></label>
                    <input type="text" name="img" class="form-control" id="img">
                </div>
                <div class="col-sm-4">
                    <label for="cantidad" class="form-label"><b style="color:navy; background-color: white;">Cantidad</b></label>
                    <input type="number" min="0" step="1" name="cantidad" id="cantidad" class="form-control">
                </div>  
            </div>
            <button class="btn btn-warning my-3" type="submit"><b style="color: black;">Subir datos</b></button>
            <a class="btn btn-warning" href="ver_productos.php"><b>Ver Producto</b></a>
        </div>

    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>