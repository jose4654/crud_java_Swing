
<!---php--->
<?php

require_once('funciones/funciones_menu.php');

$categoria = $_GET['nombre'] ?? null;

$lista_menu = getMenu($categoria);
//lista de selleccion
$categorias = getCategoriasMenu();

?>


<!---php--->
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

    <title>ensemble studios</title>
</head>
<body>
    <!--encabezado-->
 
    <header class="container-fluid bg-primary d-flex justify-content-center">
      <p class="text-light mb-0 p-3 fs-6">Contactanos (+54)1144708248</p>
  </header>

  <nav  class="navbar navbar-expand-lg navbar-light p-3 "   id="menu">
      <div class="container">
        <a class="navbar-brand" href="index.html">
            <span class="fs-3 text-primary fw-bold" >ensemble studios </span>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" aria-current="" href="index.php">Inicio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#juego">juegos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contacto.php.">Contacto</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="somos.php">sobre nosotros</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="404 Page/error.php">proyectos a futuro</a>
            </li>
          </ul>
          
        </div>

      </div>
    </nav>
      <!--slider imagenes-->
      <div id="carousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active" data-bs-interval="3000">
            <img src="./img/im1.png" class="d-block w-100" alt="">
          </div>
          <div class="carousel-item" data-bs-interval="3000">
            <img src="./img/im2.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item" data-bs-interval="3000">
            <img src="./img/im3.jpg" class="d-block w-100" alt="...">
          </div>
 
 
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carousel"  data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carousel"  data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>    
    
      <!--intro-->
      <section class="d-flex flex-column justify-content-center align-items-center pt-5  text-center w-50 m-auto" id="intro ">
        <h1 class="rrrr">somos una compañia de diseño de juegos para pc con cede en dallas,texas(estados unidos) <span class="text-primary">Ensemble studios<span/></h1>
         <p class="p-3  fs-4">
             <span class="text-primary" >Ensemble studios.</span> somos la compañia donde tenemos desarrollado  los mejores juegos (rts)del mercado.        
         </p>   
        </section>
  <!--cards-->
    <?php    
  require_once('relleno/prin.php'); 
  ?>
      <!---segunda tabla--->

      <div class="container">
        <h1  id="juego" class="text text-center" > juegos </h1>
        <form action="menu.php" method="get" class="mb-5">
            <div class="mb-3">
                <label for="categoria" class="form-label"> seleccione un juego </label>

                <select name="categoria" id="categoria" class="form-control">
                    <option value=""> Seleccione un juego </option>
                    <?php foreach($categorias as $c): ?>
                        <option <?php if($c == $categoria): ?> selected <?php endif ?> value="<?php echo $c ?>"> <?php echo $c ?> </option>
                    <?php endforeach ?>
                </select>

            </div>
            
            <button type="submit" class="btn btn-primary"> Filtrar </button>
            <a class="btn btn-danger" href="menu.php"> Limpiar </a>
       

        </form>
        <table class="table table-primary table-hover ">
            <thead class="table-dark">
                <tr>                    
                    <th> juegos </th>
                    <th> Nombre </th>
                    <th> año lanzamiento </th>
                    <th> numero serie </th>
                    <th> Precio </th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($lista_menu as $item): ?>
                    <tr>
                        <td>
                            <img src="img/coleccion/<?php echo $item['categoria'] ?>.png" alt="">
                            <?php echo $item['categoria'] ?>
                        </td>
                        <td>
                            <?php echo $item['nombre'] ?>
                        </td>
                        <td>
                            <?php echo $item['año_lanzamiento'] ?>
                           
                        </td>
                        <td>
                            <?php echo $item[ 'num_serie'] ?>
                           
                        </td>
                        <td>
                            <?php if ($item['descuento'] > 0): ?>
                                <span class="text text-success"> $<?php echo number_format( ($item['precio'] - $item['descuento']), 2, ',', '.' ) ?> </span>
                                <span class="text-decoration-line-through"> $<?php echo number_format($item['precio'], 2, ',', '.') ?> </span>
                            <?php else: ?>
                                <span> $<?php echo number_format($item['precio'], 2, ',', '.') ?> </span>
                            <?php endif ?>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>

      
       <!--foter-->
      <!--=========================================================='10003' -->          
<?php require("relleno/_footer.php")?>                             
<!--========================================================== -->
  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script> 
  <script src="https://unpkg.com/typewriter-effect@latest/dist/core.js"></script>
  <script src="main.js"></script>
     
          
              
            </body>
          </html>
   