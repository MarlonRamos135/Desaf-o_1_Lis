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
                        <a class="navbar-brand fs-3"><b style="color: white;">TextilExport</b></a>
                    </div>
                </div>
                <form class="d-flex">
                    <a class="btn btn-outline-light" href="interfaz_inicioSeccion.php" type="submit"><b>Cerrar Sesión</b></a>
                </form>
            </div>
        </nav>
    </header>

    <br><br>
    <div class="container" >
    <h1 style="color: black;font-size: 40px;text-align: center; font-family: fantasy;">los Productos Agregados Son Los Siguientes</h1>
    <br>

 <div class="row d-flex justify-content-center">
        <div class="col-sm-10 col-sm-offset-2">
            <table class="table table-bordered table-striped">
                <thead>
                    <th><b>Nombre</b></th>
                    <th><b style="color:navy">Código</b></th>
                    <th><b>Descripción</b></th>
                    <th><b style="color:navy">Imágen</b></th>
                    <th><b>Categoría</b></th>
                    <th><b style="color:navy">Precio</b></th>
                    <th><b>Cantidad</b></th>
                    <th><b style="color:navy">Acciones</b></th>
                </thead>
                <tbody>
                   
    </div>
                    
                    <?php 
                        $productos = simplexml_load_file('productos.xml');
                        foreach($productos->producto as $producto){

                        
                    ?>

                    <tr>
                        <td><?= $producto->nombre ?></td>
                        <td><?= $producto->codigo ?></td>
                        <td><?= $producto->desc ?></td>
                        <td><img src="<?= $producto->img ?>" alt="<?= $producto->nombre ?>" style="width: 150px; height: auto;"></td>
                        <td><?= $producto->categoria ?></td>
                        <td><?= $producto->precio ?></td>
                        <td><?= $producto->cantidad ?></td>
                        <td>
                        <button class="btn btn-info btn-edit" 
                            data-codigo="<?= $producto->codigo ?>" 
                            data-nombre="<?= $producto->nombre ?>" 
                            data-img="<?= $producto->img ?>" 
                            data-desc="<?= $producto->desc ?>" 
                            data-categoria="<?= $producto->categoria ?>" 
                            data-precio="<?= $producto->precio ?>" 
                            data-cantidad="<?= $producto->cantidad ?>" 
                            data-bs-toggle="modal" 
                            data-bs-target="#editModal">
                            Editar
                        </button>
                            <br>
                            <br>
                            <a href="borrar_producto.php?codigo=<?= $producto->codigo ?>" class="btn btn-danger"><b>Eliminar</b></a>
                        </td>
                    </tr>


                    <?php } ?>
                </tbody>
            </table>
        </div>
         <br>
         <br> 
         
    
                <div class="col-sm-6" style="text-align: center;" ><a style="background-color:black;color: white;"  class="btn" href="interfaz_admin.php"><b>Agregar Producto</b></a>
                <br>
                <br>
                
    </div>
<hr>

<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel">Editar Producto</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="editar_producto.php" method="POST">
                        <input type="hidden" id="codigo" name="codigo">
                        
                        <div class="mb-3">
                            <label for="nombre" class="form-label">Nombre</label>
                            <input type="text" class="form-control" id="nombre" name="nombre">
                        </div>

                        <div class="mb-3">
                            <label for="desc" class="form-label">Descripción</label>
                            <textarea class="form-control" id="desc" name="desc" rows="3"></textarea>
                        </div>

                        <div class="mb-3">
                            <label for="img" class="form-label">URL de Imagen</label>
                            <input type="text" class="form-control" id="img" name="img">
                        </div>

                        <div class="mb-3">
                            <label for="categoria" class="form-label">Categoría</label>
                            <select name="categoria" id="categoria" class="form-select">
                                <option value="Textil">Textil</option>
                                <option value="Promocional">Promocional</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="precio" class="form-label">Precio</label>
                            <input type="number" step="0.01" class="form-control" id="precio" name="precio">
                        </div>

                        <div class="mb-3">
                            <label for="cantidad" class="form-label">Cantidad</label>
                            <input type="number" class="form-control" id="cantidad" name="cantidad">
                        </div>

                        <button type="submit" name="modificar" class="btn btn-success">Guardar Cambios</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            let editButtons = document.querySelectorAll(".btn-edit");
            
            editButtons.forEach(button => {
                button.addEventListener("click", function () {
                    document.getElementById("codigo").value = this.getAttribute("data-codigo");
                    document.getElementById("nombre").value = this.getAttribute("data-nombre");
                    document.getElementById("desc").value = this.getAttribute("data-desc");
                    document.getElementById("img").value = this.getAttribute("data-img");
                    document.getElementById("categoria").value = this.getAttribute("data-categoria");
                    document.getElementById("precio").value = this.getAttribute("data-precio");
                    document.getElementById("cantidad").value = this.getAttribute("data-cantidad");
                });
            });
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>