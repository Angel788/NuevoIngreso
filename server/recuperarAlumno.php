<?php
    $database=new mysqli("localhost","root","","formulario");
    $query=$database->query("select alumno.boleta, alumno.curp,alumno.cita from alumno where alumno.curp='".$_POST['curp']."';");
    $arr=$query->fetch_object();
    $json=json_encode($arr);
    echo $json;
?>