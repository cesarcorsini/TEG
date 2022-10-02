<?php include("../includes/classes/config.php");
include_once("../includes/classes/Cuenta.php");

$newCuenta = new Cuenta($con);

if (isset($_POST["login"])) {
  $usuario = $_POST["user"];
  $clave = $_POST["clave"];
  $p_rol = "SELECT * FROM usuarios WHERE rol = ?";

  $inicio = $newCuenta->Login($usuario,$clave,$p_rol);

  if($inicio && $p_rol="paciente") {
    header("Location: indexUsuario.php");
  } elseif ($inicio && $p_rol="medico") {
    header("Location: indexMedico.php");
  } else {
    echo "Credenciales incorrectas";
  }  
}



?>

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
<nav class="navbar navbar-expand-lg navbar-t">
  <div class="container">
    <a class="nav-link navbar-brand me-2" href="../views/index.php">
      <img src="../imgs/logo.png" width="70" height="70"/>
    </a>

    <div class="collapse navbar-collapse" id="navbarButtonsExample">
      <ul class="navbar-nav me-auto mb-lg-0">
        <span class="text-msj navbar-text">¡ Su salud es prioridad para nuestros especialistas !</span>
      </ul>

      <ul class="nav justify-content-center text-nav">
    
        <li class="nav-item">
          <a class="nav-link" href="" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Iniciar sesión</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../views/rPacientes.php">Registrarse</a>
        </li>

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

  <modal>
  <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
               <img class="center-items" src="../imgs/logo.png" width="70px" height="70px"/>
      </div>
      <div class="modal-body">
        <form action="../views/index.php" method="POST">
            <div class="col-12 mb-1">
              <label for="user" class="form-label text-blue-b">Usuario</label>
              <input type="text" class="form-control" id="user" name="user" placeholder="Ingresa aquí tu nombre de usuario">
              <!--<div class="form-text">Tus datos no serán compartidos.</div>-->
            </div>
            <div class="col-12 mb-3">
              <label for="clave" class="form-label text-blue-b">Contraseña</label>
              <input type="password" class="form-control" id="clave" name="clave" placeholder="Ingresa aquí tu contraseña">
            </div>
            <div class="container">
              <div class="d-flex justify-content-between align-items-center">
                 <input type="submit" name="login" class="btn btn-primary" value="Entrar">
                 <input type="reset" class="btn btn-secondary ml-auto" data-bs-dismiss="modal" aria-label="Close" value="Cerrar">
              </div>
            </div>
          </form>
      </div>
    </div>
  </div>
  </div>
</modal>

<script src="../js/bootstrap.bundle.min.js"></script>

</body>
</html>