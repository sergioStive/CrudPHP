<?php
require 'datos/conexion.php';

class ProductosDAO {
    
    public function crearProductos(ProductosDTO $nuevoProducto) {
        $con =conexion::getConexion();
        $insertarPro ='INSERT INTO productos values(? , ? , ?, ? , ? , ?)';
        
        try{
            $query =$con->prepare($insertarPro);
            $query->bindParam(1, $nuevoProducto->getIdProducto());
            $query->bindParam(2, $nuevoProducto->getNombre());
            $query->bindParam(3, $nuevoProducto->getCantidad());
            $query->bindParam(4, $nuevoProducto->getIdCategoria());
            $query->bindParam(5, $nuevoProducto->getIdBodega());
            $query->bindParam(6, $nuevoProducto->getIdProveedor());
            $query->execute();
        } catch (Exception $ex) {
            echo 'Ocurrio un error, Detalle ' . $ex->getMessage();

        }
    }
    
    public function EliminarProductos(ProductosDTO $Productos) {
        $con = conexion::getConexion();
        $EliminarProducto = 'delete from productos where idProductos = ?';
        try {
            $query = $con->prepare($EliminarProducto);
            $query->bindParam(1, $Productos->getIdProducto());
            $query->execute();
        } catch (PDOException $ex) {
             echo 'Ocurrio un error en Mysql' .$ex->getMessage();         
            
        }
    }
    
    
 public function ActualizarProductos(ProductosDTO $Productos) {
        $con =conexion::getConexion();
        $insertarPro ='update productos set Nombre =? , Cantidad = ? , idProductos =?';
        
        try{
            $query =$con->prepare($insertarPro);
            $query->bindParam(1, $Productos->getIdProductos());
            $query->bindParam(2, $Productos->getNombre());
            $query->bindParam(3, $Productos->getCantidad());
            $query->execute();
        } catch (Exception $ex) {
            echo 'Ocurrio un error, Detalle ' . $ex->getMessage();

        }
    }
    
    
    
    public function ListarProductos() {
        $con =conexion::getConexion();
        $productos= new ProductosDTO();
        
        try{
            $listarProductos ="SELECT idProductos, Nombre from productos";
            $datos = $con->prepare($listarProductos);
            $datos->execute();
            
            foreach ($datos as $rows){
            $productos->setIdProducto($rows['idProductos']);
            $productos->setNombre($rows['Nombre']);
                
            }
        } catch (PDOException $ex) {
            echo 'Ocurrio un error, Detalle ' . $ex->getMessage();
        }
    }
    
}
