<?php


class Tb_statusDTO {
    private $idstatus;
    private $tipo_status;
    function getIdstatus() {
        return $this->idstatus;
    }

    function getTipo_status() {
        return $this->tipo_status;
    }

    function setIdstatus($idstatus) {
        $this->idstatus = $idstatus;
    }

    function setTipo_status($tipo_status) {
        $this->tipo_status = $tipo_status;
    }


}

