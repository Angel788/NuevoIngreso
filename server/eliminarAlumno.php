<?php
   $database=new mysqli("localhost","root","","formulario");
   $query=$database->query("delete from alumno where alumno.curp='".$_POST['curp']."';");
   echo('Eliminado el usuario con curp='.$_POST['curp']);
?>