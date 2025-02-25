<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TextilExport</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body background="imagenes/morocco.png">
  
    <header>
        <nav style="background-color:black;" class="navbar navbar-dark">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-4">
                        <a class="navbar-brand fs-3"><b style="color: white;">Bienvenid@s</b></a>
                    </div>
                </div>
                <form class="d-flex">
                <a class="btn btn-outline-light" href="interfaz_inicioSeccion.php" type="submit"><b>Cerrar Sesión</b></a>
                </form>
            </div>
        </nav>
    </header>
<hr>
<div class="container">
<br>
<div><h1 style="text-align:center;font-size: 23px;color:navy;background-color: white;"><b>Textiles Únicos para tus Creaciones</b></h1></div>

 <br>
    <div class="row justify-content-center ">
        
        <?php 
            $productos = simplexml_load_file('productos.xml');
            foreach($productos->producto as $producto){

            
        ?>
          <div class="col-sm-4">
              <div>
                  <div class="card" style="width: 18rem;height: auto;">
                      <img src="<?= $producto->img ?>" class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title"><b><?= $producto->nombre ?></b></h5>
                        <p class="card-text"><?= $producto->desc ?></p>
                        <button type="button" style="background-color: navy ;color : white;"; class="btn" data-bs-toggle="modal" data-bs-target="#modal_<?= $producto->codigo ?>">
                           <b>Ver más</b> 
                        </button>


                      </div>
                    </div>
              </div>
          </div>

          <div class="modal fade" id="modal_<?= $producto->codigo ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel"><?= $producto->nombre ?></h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <div class="container">
                  <div class="row justify-content-center mb-4" align="center">
                    <img src="<?= $producto->img ?>" class="col-sm-6 text-center" alt="<?= $producto->nombre ?>">
                  </div>
                  <div class="row">
                    <div class="col-sm-7">
                      <h3><?= $producto->codigo ?></h3>
                      <p><?= $producto->desc ?></p>
                    </div>
                    <div class="col-sm-5">
                      <p><b>Precio:</b></p>
                      <p><?= $producto->precio ?></p>
                      <p><b>Cantidad disponible:</b></p>
                      <p><?= $producto->cantidad ?></p>
                      <p><b>Categoría:</b></p>
                      <p><?= $producto->categoria ?></p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
              </div>
            </div>
          </div>
        </div>

        <?php 
            }
        ?>
    </div>
</div>
<hr>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>


</body>
</html>