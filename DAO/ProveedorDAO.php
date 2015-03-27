<?php
require 'datos/conexion.php';

class ProveedorDAO {
    
    public function crearProveedor(ProveedorDTO $nuevoProveedor) {
        $con =conexion::getConexion();
        $insertar ='INSERT INTO proveedores values(?, ?, ?, ?)';
        
        try{
            $query =$con->prepare($insertar);
            $query->bindParam(1, $nuevoProveedor->getIdProveedor());
            $query->bindParam(2, $nuevoProveedor->getNombre());
            $query->bindParam(3, $nuevoProveedor->getTelefono());
            $query->bindParam(4, $nuevoProveedor->getDireccion());
            $query->execute();
        } catch (Exception $ex) {
            echo 'Ocurrio un error, Detalle ' . $ex->getMessage();

        }
    }
    public function obtenerProveedores() {
        $con =conexion::getConexion();
        $proveedores= new ProveedorDTO();
        
        try{
            $listarProveedores ="SELECT idProveedor, Nombre from proveedores";
            $datos = $con->prepare($listarProveedores);
            $datos->execute();
            
            foreach ($datos as $rows){
            $proveedores->setIdProveedor($rows['idProveedor']);
            $proveedores->setNombre($rows['Nombre']);
                
            }
        } catch (PDOException $ex) {
            echo 'Ocurrio un error, Detalle ' . $ex->getMessage();
        }
    }
    public function ModificarProveedor($idProveedor,$Nombre,$Telefono,$Direccion)
    {
        try {
            $query =('update proveedor SET idProveedor = ?, nombre = ?, Telefono = ?, Direccion=? WHERE idProveedor = ?');
            $query->bindParam(1, $idProveedor);
            $query->bindParam(2, $nombre);
            $query->bindParam(3, $Telefono);
            $query->bindParam(4, $Direccion);
            $query->execute();
        
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }
}
