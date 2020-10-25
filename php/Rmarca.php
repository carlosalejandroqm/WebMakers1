<?php

$nombre=$_POST ['nombre'];
$descri=$_POST ['descri'];

if (!$nombre == "" && !$descri == "") {
    require("conexion.php");
    $saber="SELECT nombre FROM marca WHERE nombre='$nombre'";
    $saberBD=$conexion->query($saber);
    if(($saberBD->num_rows)>0){
     echo 3;
    }else{
        $saber="INSERT INTO marca (nombre,descripcion) VALUES('$nombre', '$descri')";
        $saberBD=$conexion->query($saber);
        if ($saberBD) {
            echo 1;
        }else{
            echo 2;
        }
    }
}
?>