<?php 
    if(isset($_POST)){
        $nombre = $_POST['nombre'];
        $desc = $_POST['desc'];
        $precio = $_POST['precio'];
        $categoria = $_POST['categoria'];
        $img = $_POST['img'];
        $cantidad = $_POST['cantidad'];

        $codigo = strtoupper(substr($nombre, 0, 4)) . mt_rand(1000, 9999);

        $productos = simplexml_load_file('productos.xml');

        $producto = $productos->addChild('producto');
        $producto->addChild('nombre', $nombre);
        $producto->addChild('codigo', $codigo);
        $producto->addChild('desc', $desc);
        $producto->addChild('img', $img);
        $producto->addChild('categoria', $categoria);
        $producto->addChild('precio', $precio);
        $producto->addChild('cantidad', $cantidad);

        file_put_contents('productos.xml', $productos-> asXML());
        header('location:interfaz_admin.php?exito=1');


    }


?>