<?php include("../includes/classes/config.php");
include_once("../includes/classes/Cuenta.php");

$newCuenta = new Cuenta($con);

if (isset($_POST["login"])) {
  $usuario = $_POST["usuario"];
  $clave = $_POST["clave"];

  $inicio = $newCuenta->Login($usuario,$clave);

  if($inicio) {
    header("Location: indexUusario.php");
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
    <title>Document</title>
</head>
<body>
<form action="iPacientes.php" method="POST">
  <div class="mb-3">
    <label for="usuario" class="form-label">Email address</label>
    <input type="text" class="form-control" id="usuario" name="usuario">
    <div id="usuarioHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="password" class="form-label">Password</label>
    <input type="clave" class="form-control" id="password" name="clave">
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" name="login" class="btn btn-primary">Submit</button>
</form>
</body>
</html>