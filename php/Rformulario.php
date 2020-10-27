<?php

$nombre=$_POST['nombre'];
echo $nombre;
$correo=$_POST['correo'];
$comentarios = $_POST['comentarios'];

if (!$nombre == "" && !correo == "" && !comentarios =="") {
    require("conexion.php");
    $saber="SELECT nombre FROM formulario WHERE nombre='$nombre'";
    $saberBD=$conexion->query($saber);
    if(($saberBD->num_rows)>0){
     echo 3;
    }else{
        $saber="INSERT INTO formulario (nombre,email,comentarios) VALUES('$nombre', '$correo','$comentarios')";
        $saberBD=$conexion->query($saber);
        if ($saberBD) {
            echo 1;
        }else{
            echo 2;
        }
    }
}
?>