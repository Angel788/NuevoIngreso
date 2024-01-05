<?php
    session_start();
    if(isset($_SESSION['correo'])==0 || isset($_SESSION['contrasena'])==0){
        echo('Acceso denegado');
        header("location:../login.php");
    }
    else{
        $database=new mysqli("localhost","root","","formulario");
        $query=$database->query("update alumno set alumno.".$_POST['campo']."='".$_POST['value']."' where alumno.curp='".$_POST['curp']."';");
        echo('Actualizado el usuario con id='.$_POST['id']);
    }
?>