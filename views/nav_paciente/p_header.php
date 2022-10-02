<?php include("../includes/classes/config.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../src/styles.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css"/>
    <link rel="stylesheet" href="../node_modules/bootstrap-icons/bootstrap-icons.svg">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <script src="https://kit.fontawesome.com/f6a3eedffa.js" crossorigin="anonymous"></script>
    <title>Cembar C.A.</title>
</head>
<body class="typo-text">
  
<div class="header">
<nav class="navbar navbar-expand-lg navbar-t bg-light text-nav">
  <div class="container">
    <a class="nav-link navbar-brand me-2" href="../views/index.php">
      <img src="../imgs/logo.png" width="70" height="70"/>
    </a>

    <div class="collapse navbar-collapse" id="navbarButtonsExample">
      <ul class="navbar-nav me-auto mb-lg-0">
        <span class="text-msj navbar-text">¡ Su salud es prioridad para nuestros especialistas !</span>
      </ul>

      <ul class="nav justify-content-center">
    
        <!--<li class="nav-item">
          <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Iniciar sesión</button>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../views/rPacientes.php">Registrarse</a>
        </li>-->
       
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Información</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Especialidades</a></li>
            <li><a class="dropdown-item" href="#">Doctores</a></li>
            <li><a class="dropdown-item" href="#">Sobre nosotros</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item disabled" href="#">Promociones</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link fa-brands fa-facebook" href="#">
          </a>
          </li>
          <li class="nav-item">
            <a class="nav-link fa-brands fa-instagram" href="#">
            </a>
            </li>
            <li class="nav-item">
              <a class="nav-link fa-brands fa-tiktok" href="#">
              </a>
              </li>
      </ul>
      </div>
    </div>
  </nav>
  </div>

  

<script src="../js/bootstrap.bundle.min.js"></script>

</body>
</html>