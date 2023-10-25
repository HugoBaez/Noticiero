<?php
    session_start();
    if(!isset($_SESSION['usuario']))
    {
        header("location:index.php?err=4");
    }
?>
<!DOCTYPE html>
<html lang="es">

<head>
  <link rel="stylesheet" type="text/css" href="css/normalize.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="bootstrap/bootstrap-icons.css">
  <link rel="icon" type="image/png" href="img/icon.png">
  <title>Noticias</title>
</head>

<body>
  <header>
    <nav class="navbar navbar-expand-sm navbar-dark">
      <div class="container-fluid content">
          <a href="javascript:location.reload()" class="enlace"><img src="img/logo.png" class="logo"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
          aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse borde" id="navbarText">
          <ul class="navbar-nav">
            <li>
              <a href="#">Social</a>
            </li>
            <li>
              <a href="#">Deportes</a>
            </li>
            <li>
              <a href="#">Negocios</a>
            </li>
            <li>
            <a class="text-danger" onclick="salir();" href="cerrar_sesion.php">Cerrar Sesion</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
  <div class="espacio"></div>

  <div class="container-fluid carrusel">
    <div class="carrusel-width">
      <div class="carousel slide" data-bs-ride="carousel" id="MiCarrusel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#MiCarrusel" data-bs-slide-to="0" class="active"
            arial-label="Slide 1"></button>
          <button type="button" data-bs-target="#MiCarrusel" data-bs-slide-to="1" arial-label="Slide 2"></button>
          <button type="button" data-bs-target="#MiCarrusel" data-bs-slide-to="2" arial-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active" data-bs-interval="3000" id="carusel-1"></div>
          <div class="carousel-item" data-bs-interval="3000" id="carusel-2"></div>
          <div class="carousel-item" data-bs-interval="3000" id="carusel-3"></div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#MiCarrusel" data-bs-slide="prev">
          <span class="carousel-control-prev-icon"></span>
          <span class="visually-hidden">Anterior</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#MiCarrusel" data-bs-slide="next">
          <span class="visually-hidden">Siguiente</span>
          <span class="carousel-control-next-icon"></span>
        </button>
      </div>
    </div>
  </div>

  <div class="cuerpo">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-9">
          <div class="titulo">
            <h5>RECIENTES</h5>
          </div>
          <div class="row">
            <div class="col-12" id="recientes"></div>
          </div>
        </div>

        <div class="col-lg-3">
          <div class="row borde1">
            <div class="col-6">
              <div class="destacado">
                DESTACADO
              </div>
            </div>
          </div>

          <div class="container-fluid cont-dest" id="destacado"></div>

        </div>

      </div>


    </div>
  </div>

  <footer class="text-center text-white" style="background-color: #1C252F;">
    <div class="container p-4 pb-0">
      <section class="mb-4">


        <a class="btn btn-outline-light btn-floating m-1" href="https://www.facebook.com/" role="button"><i class="bi bi-facebook"></i></i></a>


        <a class="btn btn-outline-light btn-floating m-1" href="https://twitter.com/" role="button"><i class="bi bi-twitter"></i></i></a>


        <a class="btn btn-outline-light btn-floating m-1" href="https://www.google.com/" role="button"><i class="bi bi-google"></i></i></a>


        <a class="btn btn-outline-light btn-floating m-1" href="https://www.instagram.com/" role="button"><i
            class="bi bi-instagram"></i></i></a>


        <a class="btn btn-outline-light btn-floating m-1" href="https://mx.linkedin.com/" role="button"><i class="bi bi-linkedin"></i></i></a>
      </section>

    </div>

    <div class="text-center p-3" style="background-color: #141b24">
      © 2022 Copyright:
      <a class="text-white" href="javascript:location.reload()">notivica.com</a>
    </div>
  </footer>
  <script type="text/javascript" src="bootstrap/js/bootstrap.bundle.js"></script>
  <script type="text/javascript" src="js/menu.js"></script>
  <script type="text/javascript" src="js/noticias.js"></script>
  
  <script>
        //Posiblementes se quite
        function salir() {  
           alert("Se ha cerrado la sesion");
        } 
    </script>
</body>

</html>