<?php
$id=$_POST['id'];
$nombre=$_POST['nombre'];
$qsomos = $_POST['qsomos'];
$tele = $_POST['tele'];
$direc = $_POST['direc'];
$email = $_POST['email'];
$face = $_POST['face'];
$twi = $_POST['twi'];
$insta = $_POST['insta'];

if (!$nombre == "" && !$qsomos == "" && !$tele == "" && !$direc == "" && !$email == "" && !$face == "" && !$twi == "" && !$insta == "") {
    require("conexion.php");
    $saber="SELECT nombre FROM empresa WHERE nombre='$nombre'";
    $saberBD=$conexion->query($saber);
    if(($saberBD->num_rows)>0){
     echo 3;
    }else{
        $query = "UPDATE empresa SET
         nombre='$nombre', quienes_somos='$qsomos', telefono ='$tele', direccion = '$direc', email = '$email', 
         facebook='$face',twitter='$twi',instagram ='$insta'
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