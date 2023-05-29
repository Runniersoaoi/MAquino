<?php
  $nombreEmpresa = "PROGRAMACION SCHOOL";  
  $añoAplicacion = 2023;
  $primerMensajeCar = "Primer mensaje de la aplicación";
  $segundoMensajeCar = "Segundo mensaje de la aplicación";
  $tercerMensajeCar = "Tercer mensaje de la aplicación";
  ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="/css/estilosextra.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="/css/estilosextra2.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alkatra&family=Roboto:wght@100&display=swap" rel="stylesheet">
    <title>Trabajo</title>
    </head>
    <body>
    <div class="row navPrincipal">
            <div class="col-md-2">
                <div class="container-img">
                  <a href="/">
                      <img src="/img/UCodeSpanishLogo.png" class="img-fluid" alt="" style = "margin-top: 30px;">
                  </a>
                </div>
            </div>
            <div class="col-md-3">
                <h1 class="text-center titulo"><?php echo $nombreEmpresa ?></h1>
            </div>
            <div class="col-md-7">
                <ul class="nav justify-content-end navAplicacion">
                    <li class="nav-item">
                      <a class="nav-link" href="/nosotros.php">Nosotros</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="/servicios.php">Servicios</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="/contactenos.php">Contactenos</a>
                    </li>
                  </ul>
            </div>
    </div>
