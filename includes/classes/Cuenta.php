<?php

class Cuenta {
    private $con;

    public function __construct($con) {
        $this->con = $con;
    }

    public function Login($usuario,$clave) {

        $query = $this->con->prepare("SELECT * FROM usuarios WHERE usuario = :user");
        $query->bindParam(":user",$usuario);
        $query->execute();

        if($query->rowCount() == 1) {
            $row = $query->fetch(PDO::FETCH_ASSOC);
            $clave = $row['clave'];

            $option = array(
                'cost' => 10
            );
    
            //$claveHashed = password_hash($p_clave, PASSWORD_BCRYPT, $option);

            /*echo password_verify($clave,$claveHashed);

            if (password_verify($clave,$claveHashed)) {
                return true;
            } else {
                return false;
            }*/
            return true;
            echo "Login: ".$clave;
        } else {
            return false;
        }
        }

        public function lUsuario($email,$clave) {
            $query = $this->con->prepare("SELECT * FROM usuario WHERE email = :email");
            $query->bindParam(":email",$email);
            $query->execute();
    
            if ($query->rowCount() == 1) {
                $row = $query->fetch(PDO::FETCH_ASSOC);
                $claveHashed = $row['clave'];
    
                if(password_verify($clave,$claveHashed)) {
                    return true;
                } else {
                return false;
            } 
        } else {
            return false;
        }
    }

    public function rUsuario($id_usuario, $p_usuario, $p_clave, $p_rol) {

        $successdos = $this->iUsuario($id_usuario, $p_usuario, $p_clave, $p_rol);

        if ($successdos) {
            return true;
        } else {
            return false;
        }

    }

    private function iUsuario($id_usuario, $p_usuario, $p_clave, $p_rol) {

        $option = array(
            'cost' => 10
        );

        $claveHashed = password_hash($p_clave, PASSWORD_BCRYPT, $option);

        $query = $this->con->prepare("INSERT INTO usuarios VALUES (:id_usuario, :usuario, :clave, :rol)");

        $query->bindParam(":id_usuario",$id_usuario);
        $query->bindParam(":usuario",$p_usuario);
        //$query->bindParam(":clave",$p_clave);
        $query->bindParam(":clave",$claveHashed);
        $query->bindParam(":rol",$p_rol);


        return $query->execute();

    }
    }

?>