<?php
class ProductosDTO {
   
    function getIdProducto() {
        return $this->idProducto;
    }

    function getNombre() {
        return $this->nombre;
    }

    function getCantidad() {
        return $this->cantidad;
    }

    function getIdCategoria() {
        return $this->idCategoria;
    }

    function getIdBodega() {
        return $this->idBodega;
    }

    function getIdProveedor() {
        return $this->idProveedor;
    }

    function setIdProducto($idProducto) {
        $this->idProducto = $idProducto;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setCantidad($cantidad) {
        $this->cantidad = $cantidad;
    }

    function setIdCategoria($idCategoria) {
        $this->idCategoria = $idCategoria;
    }

    function setIdBodega($idBodega) {
        $this->idBodega = $idBodega;
    }

    function setIdProveedor($idProveedor) {
        $this->idProveedor = $idProveedor;
    }


  
   
}
