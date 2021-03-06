<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla de marcas</title>
    <link rel="stylesheet" href="../css/estilo.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

    <link rel="stylesheet" href="../css/fontawesome-free-5.13.0-web/css/fontawesome.min.css">
    <link rel="stylesheet" href="../css/fontawesome-free-5.13.0-web/css/brands.css"> 
    <link rel="stylesheet" href="../css/fontawesome-free-5.13.0-web/css/solid.css">

  

</head>
<body>
    <!-- barra de navegacion -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-toggleable-sm sticky-top">
        <a class="navbar-brand" href="#"><img
                src="https://upload.wikimedia.org/wikipedia/commons/thumb/f/fa/Apple_logo_black.svg/647px-Apple_logo_black.svg.png"
                alt="logo" class="d-inline-block aling-top" style="width:40px;">
            Manzana
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav mr-0 ml-auto mt-2 mt-lg-0 text-center">
            <a class="nav-link " href="../index.html">Inicio</a>
            <a class="nav-link active" href="../html/marca.html">Marcas</a>
            <a class="nav-link " href="../html/categoria.html">Categorias</a>
            <a class="nav-link" href="producto.php">Productos</a>
            <a class="nav-link " href="empresa.php">Datos de la empresa</a>
        </div>
        </div>
    </nav>
  <!--Carousel -->
  <div id="carrusel" class="carousel slide carousel-fade " data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="../images/Circular Cutaways Tumblr Banner.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="../images/Circular Cutaways Tumblr Banner (1).jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="../images/img_zapatos.jpg" class="d-block w-100" alt="...">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carrusel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carrusel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
  </div>
<!--Tabla -->
<div class="container text-center mt-4">
  <h3>Listado de marcas</h3>
</div>
<div class="container">
                
  <table class="table table-bordered table-hover"><br>
    <thead class="text-center">
      <tr>
                               
      <th>Nombre</th>
      <th>Descripción</th>
      <th>Editar</th>
      <th>Eliminar</th>
      </tr>
      </thead>
      <tbody>
      <?php       
                            
      require("conexion.php");
      $consulta = "SELECT * FROM marca";
      $resultado = $conexion->query($consulta);
      while ($fila = $resultado->fetch_assoc()) {
        
      ?>
      <tr>
      <td> <?php echo $fila['nombre']; ?></td>
      <td> <?php echo $fila['descripcion']; ?></td>
                                
      <td class="text-center">
      <a data-toggle="modal" data-target="#exampleModal" href="#" onclick="dato(<?php echo $fila['id'];?>)">
      <i class="fas fa-edit"></i></a></td>
      <td class="text-center"><a href="#" data-toggle="modal" data-target="#exampleModal2" onclick="dato2(<?php echo $fila['id'];?>)">
      <i class="fas fa-trash" style="color:#d32f2f;"></i></a></td>
      </tr>
      <?php
      }
      ?>
    </tbody>
    </table>
    <div style="margin-bottom: 15px;">
           <a href="../html/marca.html"><button type="submit" class="btn btn-success" id="listado">Agregar marca</button></a>
    </div>
</div>
<!--Modal-->
<div class="modal fade" id="exampleModal" data-backdrop="static" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar marca</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
    
      <form action="editarMarca.php" id="Fmarca" method="POST">
          <div class="form-group">
           
            <p id="espacio"></p>
            <label for="recipient-name" class="col-form-label">Nombre:</label>
            <input type="text" class="form-control" name="nombre" id="recipient-name" require>
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Descripción:</label>
            <textarea class="form-control" id="message-text" name="descri" require></textarea>
          </div>
          <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
              <button type="submit" id="guardar" class="btn btn-primary" >Guardar cambios</button> 
           </div>
        </form>
      </div>
    </div>
  </div>
  </div>
<!-- Modal -->
<div class="modal fade" id="exampleModal2" tabindex="-1" data-backdrop="static" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Eliminar</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="eliminarMarca.php" method="POST">
         ¿Desea eliminar marca?
         <p id="espacio2"></p>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          <button type="submit" class="btn btn-primary">Eliminar</button>
      </div>
        </form>
        </div>
    </div>
  </div>
</div>
 <!-- Footer -->
 <footer class="footer py-2">
    <div class="container ">
      <div class="row">
        <div class="col col-sm-10">
          <b>Información de contacto</b>
          <br>
          Email: webmakers@gmail.com
          <br>
          Teléfono: 3132070709
        </div>
        <div class="col col-sm-2" id="redes">
          <a href=""><i class="fab fa-facebook-square fa-2x" title="Facebook"></i></a>
          <a href=""><i class="fab fa-twitter-square fa-2x" title="Twitter"></i></a>
          <a href=""><i class="fab fa-instagram fa-2x" title="Instagram"></i></a>
          <br>
          <a href="#" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">
            <button type="button" class="btn btn-primary btn-sm">Contactanos</button></a>
        </div>
      </div>
      <div class="text-center">
        Licencia Creative Commons. Desarrollado por Web Makers 2020.
      </div>
    </div>
  </footer>
  
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
    crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
    crossorigin="anonymous"></script>     
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script> 
<script src="../js/form.js" ></script>

<script type="text/javascript">
$(document).ready(function(){
$('#guardar').click(function(){
var datos=$('#Fmarca').serialize();

 $.ajax({
   type: "POST",
   url: "editarMarca.php",
   data: datos,
   success: function(r){
    if(r==1){
      window.alert("La marca ha sido editada")
    }else if(r==2){
      window.alert("La marca no ha sido editada")
    }else if(r==3){
      window.alert("La marca ya existe")
    }else {
      window.alert("Llenar todos los campos")
    }

   }
 });
 return false;
});

});
</script>

</body>
</html>