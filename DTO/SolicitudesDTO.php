<?php

class SolicitudesDTO {
    function getIdSolicitud() {
        return $this->idSolicitud;
    }

    function getNombre() {
        return $this->Nombre;
    }

    function getObservaciones() {
        return $this->Observaciones;
    }

    function getFecha() {
        return $this->fecha;
    }

    function setIdSolicitud($idSolicitud) {
        $this->idSolicitud = $idSolicitud;
    }

    function setNombre($Nombre) {
        $this->Nombre = $Nombre;
    }

    function setObservaciones($Observaciones) {
        $this->Observaciones = $Observaciones;
    }

    function setFecha($fecha) {
        $this->fecha = $fecha;
    }


}
