<?php

    session_start();
    define('BASE_DIR', 'c:/xampp/htdocs/TEG/bst-TEG');
    define('BASE_URL', '/bst-TEG');
    date_default_timezone_set("America/Caracas");

    try {
        $con = new PDO("mysql:dbname=cembar_db;host=localhost", "root", "");
        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
        //$con->setAttribute( PDO::ATTR_EMULATE_PREPARES, false );
    } catch (PDOException $th) {

        echo "Conexión fallida" . $th->getMessage();

    }

?>