<?php

class ProveedorDTO {
    function getIdProveedor() {
        return $this->idProveedor;
    }

    function getNombre() {
        return $this->Nombre;
    }

    function getTelefono() {
        return $this->Telefono;
    }

    function getDireccion() {
        return $this->Direccion;
    }

    function setIdProveedor($idProveedor) {
        $this->idProveedor = $idProveedor;
    }

    function setNombre($Nombre) {
        $this->Nombre = $Nombre;
    }

    function setTelefono($Telefono) {
        $this->Telefono = $Telefono;
    }

    function setDireccion($Direccion) {
        $this->Direccion = $Direccion;
    }




}