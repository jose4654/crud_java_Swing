
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!--bostrap css-->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">
     <link rel="stylesheet" href="./css/contacto.css">
    

     <link rel="shoe icon" href="img/im4.jpg">
    <title>contacto</title>
</head>
<body>
 
    <!--encabezado-->
    
    <?php require_once('relleno/_nav.php'); ?>
  <!--===== -->
   <!-- ubicacion-->
<!--============== -->



  <div id="local" class="border-top border-2 ">
      <div class="mapa"> </div>
      <div>
          <div class="wrapper-local">
              <h2>Ubicado en Miami, Florida</h2>
            
              <p class="fs-5 text-body">Elijimos Miami para nuestra oficina con el objetivo de estar cerca a nuestros clientes. Estamos ubicados en Brickell, el corazon y el centro financiero de Miami, cerca de los mejores restaurantes, tiendas y tan solo 15 minutos de las playas. ¡Visitennos y no se arrepentiran!</p>
              <section class="d-flex justify-content-start" id="numeros-local">
                  <div>
                      <p class="text-primary fs-5">200</p>
                      <p>Dias de Sol</p>
                  </div>
                  <div>
                      <p class="text-primary fs-5">100%</p>
                      <p>Aprobado</p>
                  </div>
                  <div>
                      <p class="text-primary fs-5">24 °C</p>
                      <p>Temperatura</p>
                  </div>
                </section>
                  
          </div>
      </div>
  </div>

  <!--========================================================== -->
   <!-- SECCION CONTACTOS-->
<!--========================================================== -->

<section id="seccion-contacto" class="border-bottom border-secondary border-2">
  <div id="bg-contactos">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#1b2a4e" fill-opacity="1" d="M0,32L120,42.7C240,53,480,75,720,74.7C960,75,1200,53,1320,42.7L1440,32L1440,320L1320,320C1200,320,960,320,720,320C480,320,240,320,120,320L0,320Z"></path></svg>
  </div>

<!--========================================================== -->
 <!-- CONTENEDOR DEL FORMULARIO -->
<!--========================================================== -->
  <div class="container  border-top border-primary " style="max-width: 500px" id="contenedor-formulario">
      <div class="text-center mb-4" id="titulo-formulario">
        <div><img src="./img/somos/im8.png" alt="" class="img-fluid ps-5"></div>
        <h2>Contactanos</h2>
        <p class="fs-5">Estamos aqui para hacer realidad de tus proyectos</p>
      </div>

      <form   method="POST" data-netlify="true" action="#">  
      <div class="mb-3">            
              <input type="text" class="form-control" id="name" name="name" placeholder="nombre">
            </div>
            <div class= "mb-3">           
              <input type="email" class="form-control" id="email" name="email" placeholder="email">
            </div>
          <div class="mb-3">
            <input type="submit" class=" btn btn-primary w-100 fs-5" name="register">Enviar Mensaje</input>
          </div>
          
      </form>
      <?php 
        include("registro.php");
        ?>
  
  </div>
</section>
 

  <!--===========-->
    <!--FOOTER-->
<!--=========== -->

<?php 
        include("relleno/_footer.php");
        ?>
      
     <!-- Option 1: Bootstrap Bundle with Popper -->
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script> 
     <script src="https://unpkg.com/typewriter-effect@latest/dist/core.js"></script>
</body>
</html>