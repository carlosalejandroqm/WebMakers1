<?php

// $id = $_POST['id'];
$referencia=$_POST ['referencia'];
$nombre=$_POST ['nombre'];
$valor=$_POST ['valor'];
$marca=$_POST ['marca'];
$categoria=$_POST ['categoria'];
$descripcion=$_POST ['descripcion'];
$detalle=$_POST ['detalle'];


if (!$referencia == "" && !$nombre == "" && !$valor == "" && isset($_POST['marca']) && isset($_POST['categoria']) && !$descripcion == "" && !$detalle == "") {
    require("conexion.php");
    $saber="SELECT nombre FROM producto WHERE nombre='$nombre'";
    $saberBD=$conexion->query($saber);
    if(($saberBD->num_rows)>0){
     echo 3;
    }else{
        $saber="INSERT INTO producto (referencia, nombre, valor, idmarca, idcategoria, descripcion, detalle) 
        VALUES('$referencia','$nombre','$valor','$marca','$categoria','$descripcion','$detalle')";
        $saberBD=$conexion->query($saber);
        if ($saberBD) {
            header('Location: producto.php?alert=1');
        }else{
            echo 2;
        }
    }
}
?>

<!-- !isset($_POST['NAME']) -->

<!-- si trae la referencia -->