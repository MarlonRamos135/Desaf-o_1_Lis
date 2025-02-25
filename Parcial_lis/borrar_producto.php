<?php

    if(isset($_GET['codigo'])){
        $codigo = $_GET['codigo'];
        $productos = simplexml_load_file('productos.xml');
        $indexToDelete = -1;
        $found = false;

        foreach($productos->producto as $producto){
            $indexToDelete++;
            if($producto->codigo == $codigo){
                $found = true;
                break;
            }
        }
        if($found){
            unset($productos->producto[$indexToDelete]);
            file_put_contents('productos.xml', $productos->asXML());
            
        }
        header('location:ver_productos.php');
    }