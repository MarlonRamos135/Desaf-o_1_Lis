<?php
//verificar si los datos de los imput viene basios si traen contenido o no 
//empty es para identificar si una variale viene basiao  parametro  
//verificando que no vengan vacios 
if(isset($_POST)){

    $Nombre_Usuario = $_POST['Nombre_usuario'];//obtenemos los datos enviados  desde el formulario 
    $Contraseña = $_POST['Contraseña'];
     if($Nombre_Usuario == 'usuario_publico_cliente' && $Contraseña == 'soycliente1234'){
        header('location:interfaz_Publica.php'); //dirigimos al usuario a otra pagina 
      
     }
     else if($Nombre_Usuario =='usuario_admin' && $Contraseña =='soyadmin12345'){
        header('location:interfaz_admin.php');
   
     }
     
}else
{echo"usuario no encontrado";}
?>