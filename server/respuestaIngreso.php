<?php
    $nombre=$_POST['nombre'];
    $database=new mysqli("localhost","root","","formulario");
    $query_cita=$database->query("select cita.cita from cita where id=0;");
    $obj = $query_cita->fetch_array();
    $n_cita=$obj["cita"];
    $discapacidad_m=0;
    $discapacidad_a=0;
    $discapacidad_v=0;
    if(isset($_POST['discapacidadmotriz']))$discapacidad_m=1;
    if(isset($_POST['discapacidadauditiva']))$discapacidad_a=1;
    if(isset($_POST['discapacidadvisual']))$discapacidad_v=1;
    $query_subirCita="insert into alumno (nombre,".
                    "apellidopaterno,".
                    "apellidomaterno,".
                    "boleta,".
                    "curp,".
                    "genero,".
                    "nacimiento,".
                    "correo,".
                    "telefono,".
                    "estado,".
                    "municipio,".
                    "calle,".
                    "numerolote,".
                    "codigopostal,".
                    "escuela,".
                    "discapacidadmotriz,".
                    "discapacidadauditiva,".
                    "discapacidadvisual,".
                    "otradiscapacidad,".
                    "promedio,".
                    "cita) values('".
                    $_POST['nombre']."','".
                    $_POST['apellidopaterno']."','".
                    $_POST['apellidomaterno']."','".
                    $_POST['boleta']."','".
                    $_POST['curp']."','".
                    $_POST['genero']."','".
                    $_POST['nacimiento']."','".
                    $_POST['correo']."',".
                    $_POST['telefono'].",'".
                    $_POST['estado']."','".
                    $_POST['municipio']."','".
                    $_POST['calle']."',".
                    $_POST['numerolote'].",".
                    $_POST['codigopostal'].",'".
                    $_POST['escuela']."',".
                    $discapacidad_m.",".
                    $discapacidad_a.",".
                    $discapacidad_v.",'".
                    $_POST['otradiscapacidad']."',".
                    $_POST['promedio'].
                    ",$n_cita);";
    $query_ingreso=$database->query($query_subirCita);
    $query_cita_u=$database->query("update cita set cita.cita='".($n_cita+1)."' where id=0;");
    echo "ok";
?>