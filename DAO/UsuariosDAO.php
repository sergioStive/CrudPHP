<?php
require 'datos/conexion.php';

class UsuariosDAO {
    public function crearUsuario(UsuariosDTO $nuevoUsuario) {
        $con =conexion::getConexion();
        $insertar ='INSERT INTO usuarios values(?, ?, ?, ?, ?)';
        
        try{
            $query =$con->prepare($insertar);
            $query->bindParam(1, $nuevoUsuario->getIdUsuario());
            $query->bindParam(2, $nuevoUsuario->getNombres());
            $query->bindParam(3, $nuevoUsuario->getApellidos());
            $query->bindParam(4, $nuevoUsuario->getContraseña());
            $query->bindParam(5, $nuevoUsuario->getEmail());
            $query->execute();
        } catch (Exception $ex) {
            echo 'Ocurrio un error, Detalle ' . $ex->getMessage();

        }
    }
}
