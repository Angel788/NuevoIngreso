<?php
   session_start();
   if(isset($_SESSION['correo'])==0 || isset($_SESSION['contrasena'])==0){
    echo('Acceso denegado');
   }
   else{
    $database=new mysqli("localhost","root","","formulario");
    $query=$database->query("delete from alumno where alumno.id='".$_POST['id']."';");
    echo('Eliminado el usuario con id='.$_POST['id']);
   }
?>