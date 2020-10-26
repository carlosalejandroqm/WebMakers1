<?php
$id=$_POST['id'];


    require("conexion.php");
    $saber="DELETE FROM empresa  WHERE id='$id'";
    $saberBD=$conexion->query($saber);
   if($saberBD){
    ?> 
    <script> window.alert("La empresa fue eliminada")</script>
    <?php
   }else{
    ?> 
    <script> window.alert("La empresa no fue eliminada")</script>
    <?php
   }


?>