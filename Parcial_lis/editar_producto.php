<?php
if (isset($_POST)) {
    $codigo = $_POST['codigo'];
    $nombre = $_POST['nombre'];
    $desc = $_POST['desc'];
    $img = $_POST['img'];
    $categoria = $_POST['categoria'];
    $precio = $_POST['precio'];
    $cantidad = $_POST['cantidad'];

    $productos = simplexml_load_file('productos.xml');

    foreach ($productos->producto as $producto) {
        if ((string)$producto->codigo == $codigo) {
            $producto->nombre = $nombre;
            $producto->desc = $desc;
            $producto->img = $img;
            $producto->categoria = $categoria;
            $producto->precio = $precio;
            $producto->cantidad = $cantidad;
            break;
        }
    }

    $productos->asXML('productos.xml');

    header("Location: ver_productos.php?mensaje=Producto actualizado");
    exit();
} else {
    
    header("Location: ver_productos.php");
    exit();
}
