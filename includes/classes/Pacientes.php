<?php

class Pacientes {
    private $con;
    public function __construct($con) {
        $this->con = $con;
    }

    public function rPaciente($id, $nombres, $apellidos, $cedula,$email,$localidad,$direccion,$edad,$telefono) {
        
        $success = $this->insertarDB($id, $nombres, $apellidos, $cedula,$email,$localidad,$direccion,$edad,$telefono);

        if($success) {
            return true;
        } else {
            return false;
        }
    }

    private function insertarDB($id,$p_nombres, $p_apellidos, $p_cedula,$p_email,$p_localidad,$p_direccion,$p_edad,$p_telefono) {

        $query = $this->con->prepare("INSERT INTO pacientes (id_pacientes, p_nombres, p_apellidos, p_cedula, p_email, p_localidad, p_direccion, p_edad, p_telefono) VALUES (:id, :nombres, :apellidos, :cedula, :email, :localidad, :direccion, :edad, :telefono)");
        $query->bindParam(":id",$id);
        $query->bindParam(":nombres",$p_nombres);
        $query->bindParam(":apellidos",$p_apellidos);
        $query->bindParam(":cedula",$p_cedula);
        $query->bindParam(":email",$p_email);
        $query->bindParam(":localidad",$p_localidad);
        $query->bindParam(":direccion",$p_localidad);
        $query->bindParam(":edad",$p_edad);
        $query->bindParam(":telefono",$p_telefono);

        return $query->execute();
        
    }

    public function aPaciente() {

    }

    public function getByCedula($p_cedula) {

        $query = $this->con->prepare("SELECT * FROM pacientes WHERE p_cedula = :cedula");
        $query->bindParam(":cedula",$p_cedula);
        
        $query->execute();

    }
}
?>