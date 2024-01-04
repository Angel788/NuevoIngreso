<?php
    $database=new mysqli("localhost","root","","formulario");
    $query=$database->query("select * where id='".$_POST['id']."';");
    $obj;
    while($obj=$query->fetch_object()){}
    $json=json_encode($obj);
    echo $json;
?>