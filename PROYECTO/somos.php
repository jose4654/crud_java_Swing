<?php 
    include("conexiones/conexion.php");

    $con=conectar();

    $sql="SELECT *  FROM lista";
    $query=mysqli_query($con,$sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--bostrap css-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./css/estilos.css">
    <link rel="shoe icon" href="img/im4.jpg">
    <title>quienes somos?</title>
</head>
<body>
 <!--encabezado-->
<?php require("relleno/_nav.php")?>
<section id="servicios-fila-5">
<?php require("relleno/tex.php")?>
  
    <!--========================================================== -->
                        <!-- SECCION ACERCA DE NOSOTROS-->
<!--========================================================== -->

<div class="container mt-5">
                    <div class="row"> 
                        
                        <div class="col-md-3">
                            <h1>Ingrese datos</h1>
                            <form action="crud_somos/insertar.php" method="POST">
                            
                            <input type="text" class="form-control mb-3" name="codigo" placeholder="codigo">
                              <input type="text" class="form-control mb-3" name="dni" placeholder="Dni">
                              <input type="text" class="form-control mb-3" name="nombres" placeholder="Nombres">
                              <input type="text" class="form-control mb-3" name="apellidos" placeholder="Apellidos">
                              <input type="submit" class="btn btn-primary" name="register">
                              <nav aria-label="Page navigation example ">

                          </form>
                            
                                
                        </div>

                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>Codigo</th>
                                        <th>Dni</th>
                                        <th>Nombres</th>
                                        <th>pellidos</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['codigo']?></th>
                                                <th><?php  echo $row['dni']?></th>
                                                <th><?php  echo $row['nombres']?></th>
                                                <th><?php  echo $row['apellidos']?></th>    
                                                <th><a href="crud_somos/actualizar.php?id=<?php echo $row['codigo'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="crud_somos/delete.php?id=<?php echo $row['codigo'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
                                            </tr>
                                        <?php 
                                            }
                                        ?>
                                </tbody>
                            </table>
                        </div>
                    </div>  
            </div>

<!--========================================================== -->
                        <!-- SECCION ACERCA DE NOSOTROS-->
<!--========================================================== -->

  <div class="mt-5 text-center">
      <img id="img-equipo" src="./img/somos/im4.jpg" alt="equipo">
  </div>

</section>


 <!--========== -->
                        <!--FOOTER-->
<!--======================= -->

<?php require("relleno/_footer.php")?>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script> 
    <script src="https://unpkg.com/typewriter-effect@latest/dist/core.js"></script>
    <script src="main.js"></script>
</body>
</html>