<?php
require 'datos/conexion.php';
class SolicitudesDAO {
    
    public function crearSolicitud(SolicitudesDTO $nuevaSolicitud) {
        $con =conexion::getConexion();
        $insertar ='INSERT INTO solicitudes values(?, ?, ?, ?)';
        
        try{
            $query =$con->prepare($insertar);
            $query->bindParam(1, $nuevaSolicitud->getIdSolicitud());
            $query->bindParam(2, $nuevaSolicitud->getNombre());
            $query->bindParam(3, $nuevaSolicitud->getObservaciones());
            $query->bindParam(4, $nuevaSolicitud->getFecha());
          
            $query->execute();
        } catch (Exception $ex) {
            echo 'Ocurrio un error, Detalle ' . $ex->getMessage();

        }
    }
}
