<?php
$id=$_POST['id'];


    require("conexion.php");
    $saber="DELETE FROM producto  WHERE id='$id'";
    $saberBD=$conexion->query($saber);
   if($saberBD){
    header('Location: listaProducto.php');
    ?> 
    <script> window.alert("El producto fue eliminado")</script>
    <?php
   }else{
    ?> 
    <script> window.alert("El producto no fue eliminado")</script>
    <?php
   }


?>