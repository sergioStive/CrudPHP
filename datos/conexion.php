<?php

class conexion {

    protected $db;

    public static function getConexion() {

        $conn = NULL;

        try {
            $conn = new PDO("mysql:host=localhost;dbname=basephp", "root", "1234");
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo 'ERROR: ' . $e->getMessage();
        }
        return $conn;
    }

}

$miCon = Conexion::getConexion();

if ($miCon != null) {
    echo 'ok';
} else {
    echo 'okno';
}
