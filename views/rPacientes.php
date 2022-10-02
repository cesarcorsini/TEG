<?php include_once ("./nav_user/header.php");
include_once (BASE_DIR. "/includes/classes/Pacientes.php");
include_once (BASE_DIR. "/includes/classes/Cuenta.php");

$newPaciente = new Pacientes($con);
$newCuenta = new Cuenta($con);

if(isset($_POST["rPaciente"])) {

  $id = "";
  $nombres = $_POST["p_nombres"];
  $apellidos = $_POST["p_apellidos"];
  $cedula = $_POST["p_cedula"];
  $email = $_POST["p_email"];
  $localidad = $_POST["p_localidad"];
  $direccion = $_POST["p_direccion"];
  $edad = $_POST["p_edad"];
  $telefono = "+58" + $_POST["p_telefono"];

  $registro = $newPaciente->rPaciente($id, $nombres, $apellidos, $cedula,$email,$localidad,$direccion,$edad,$telefono);
  if ($registro==true) {
    $lusuario = substr ($_POST["p_nombres"],0,1);
    $usuario = $lusuario.$cedula;
    $rol = "paciente";
    $lclave = substr ($_POST["p_nombres"],0,1);
    $clave = $lclave.$cedula;

    $id_usuario = $con->lastInsertId();
    $reg_Usuario = $newCuenta->rUsuario($id_usuario,$usuario,$clave,$rol);
    
  }

  if ($registro) {
  } else {
    echo "error";
  }
  
}
?>
<br>
<div class="container">
<div class="cont-img">
  <img src="../imgs/registro2.png" style="width: 100%;">
  <div class="col">
      <div class="title-cont-img">
        Registro de pacientes
      </div>
      <div class="textl-cont-img">
        Aquí podras registrar a los pacientes nuevos que lleguen para ser atendidos por uno de nuestros especialistas
      </div>
      <div class="textr-cont-img">
      <i class="fa-solid fa-hospital-user"></i>
      </div>
  </div>
</div>
</div>

  <br>
  <form action="./rPacientes.php" method="POST" name="form_rPaciente" class="container">

<div class="row g-3">
  <div class="col-md-3">
    <label for="p_nombres" class="form-label text-blue-b"><i class="fa-solid fa-user"></i> Nombres </label>
    <input type="text" class="form-control" placeholder="Nombres" id="p_nombres" name="p_nombres">
  </div>
  <div class="col-md-3">
    <label for="p_apellidos" class="form-label text-blue-b">Apellidos</label>
    <input type="text" class="form-control" placeholder="Apellidos" id="p_apellidos" name="p_apellidos">
  </div>
  
  <div class="col-md-2">
    <label for="p_cedula" class="form-label text-blue-b"><i class="fa-solid fa-address-card"></i> C.I. </label>
    <input type="text" class="form-control" placeholder="Número de cédula" id="p_cedula" name="p_cedula">
  </div>

  <div class="col-md-4">
  <label for="p_email" class="form-label text-blue-b"><i class="fa-solid fa-envelope"></i> Email </label>
  <input type="email" class="form-control" placeholder="Correo electrónico" id="p_email" name="p_email">
  </div>

  <div class="col-3">
  <label for="p_localidad" class="form-label text-blue-b"><i class="fa-solid fa-city"></i> Localidad</label>
    <select id="p_localidad" class="form-select" name="p_localidad">
      <option selected>...</option>
      <option>...</option>
    </select>
  </div>
  <div class="col-9">
    <label for="p_direccion" class="form-label text-blue-b"><i class="fa-solid fa-house"></i> Dirección</label>
    <input type="text" class="form-control" id="p_direccion" placeholder="Carrera / Calle / Avenida" name="p_direccion">
  </div>
  <div class="col-md-1">
    <label for="p_edad" class="form-label text-blue-b"><i class="fa-solid fa-child"></i> Edad</label>
    <input type="text" class="form-control" placeholder="#" id="p_edad" name="p_edad">
  </div>
  <div class="col-md-3">
    <label for="p_telefono" class="form-label text-blue-b"><i class="fa-solid fa-phone"></i> Número telefónico</label>
    <div class="input-group">
      <div class="input-group-text">+58</div>
      <input type="text" class="form-control" id="p_telefono" placeholder="000 0000 000" name="p_telefono">
    </div>
  </div>
  <div class="col-12">
    <button type="submit" value="Registrar" name="rPaciente" class="btn btn-primary">Sign in</button>
  </div>
</div>
  </form>
  
<br><br>

<?php include_once('./nav_user/footer.php')?>