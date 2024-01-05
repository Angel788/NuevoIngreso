<?php
        $database=new mysqli("localhost","root","","formulario");
        $q="update alumno set alumno.".$_POST['campo']."='".$_POST['valor']."' where alumno.curp='".$_POST['curp']."';";
        $query=$database->query($q);
        echo('Actualizado el usuario con curp='.$_POST['curp']);
?>