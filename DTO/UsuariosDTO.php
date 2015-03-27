<?php

class UsuariosDTO {
    function getIdUsuario() {
        return $this->idUsuario;
    }

    function getNombres() {
        return $this->Nombres;
    }

    function getApellidos() {
        return $this->Apellidos;
    }

    function getContraseña() {
        return $this->contraseña;
    }

    function getEmail() {
        return $this->email;
    }

    function setIdUsuario($idUsuario) {
        $this->idUsuario = $idUsuario;
    }

    function setNombres($Nombres) {
        $this->Nombres = $Nombres;
    }

    function setApellidos($Apellidos) {
        $this->Apellidos = $Apellidos;
    }

    function setContraseña($contraseña) {
        $this->contraseña = $contraseña;
    }

    function setEmail($email) {
        $this->email = $email;
    }


}
