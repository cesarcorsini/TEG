<?php include_once("./nav_user/header.php");
include_once BASE_DIR. '/includes/classes/Pacientes.php';

$cedula="28653750";
$Paciente = new Pacientes($con);
$p_consultar = $Paciente->getByCedula($cedula);

var_dump($p_consultar);

?>