<?php
$referencia=$_POST ['referencia'];
$nombre=$_POST ['nombre'];
$valor=$_POST ['valor'];
$marca=$_POST ['marca'];
$categoria=$_POST ['categoria'];
$descripcion=$_POST ['descripcion'];
$detalle=$_POST ['detalle'];

if (!$referencia == "" && !$nombre == "" && !$valor == "" && !$marca="" && !$categoria == "" && !$descripcion == "" && !$detalle == "") {
    require("conexion.php");
    $saber="SELECT nombre FROM producto WHERE nombre='$nombre'";
    $saberBD=$conexion->query($saber);
    if(($saberBD->num_rows)>0){
     echo 3;
    }else{
        $query = "UPDATE producto SET referencia = '$referencia' ,nombre='$nombre', valor='$valor' , idmarca = '$marca'
        , idcategoria = '$categoria' , descripcion = '$descripcion' , detalle = '$detalle'
        WHERE id='$id'";
        $resultado = $conexion->query($query);
        if ($resultado) {
            echo 1;
        }else{
            echo 2;
        }
    }
}
?>