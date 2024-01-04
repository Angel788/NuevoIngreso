<?php
    $database=new mysqli("localhost","root","","formulario");
    $query=$database->query("select alumno.boleta, alumno.curp,alumno.cita where id='".$_POST['id']."';");
    $obj;
    while($obj=$query->fetch_object()){}
    $json=json_encode($obj);
    echo $json;
?>