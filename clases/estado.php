<?php

class Estado {
    private $nId;
    private $sDescripcion;
    private $querysel;
    
    function __construct($nId=NULL, $sDescripcion=NULL) {
        $this->nId = $nId;
        $this->sDescripcion = $sDescripcion;
    }
    
    function getNId() {
        return $this->nId;
    }

    function getSDescripcion() {
        return $this->sDescripcion;
    }

    function setNId($nId) {
        $this->nId = $nId;
    }

    function setSDescripcion($sDescripcion) {
        $this->sDescripcion = $sDescripcion;
    }

    // LECTOR DE DATOS
    function Selecciona() {

        if (!$this->querysel) {
            $db = dbconnect();
            /* Definicion del query que permitira seleccionar los registros */

            $sqlsel = "select id,descripcion from estadoSolicitud order by descripcion";

            /* Preparacion SQL */
            $this->querysel = $db->prepare($sqlsel);

            $this->querysel->execute();
        }

        $registro = $this->querysel->fetch();
        if ($registro) {
            return new self($registro['id'], $registro['descripcion']);
        } else {
            return false;
        }
    }


}
