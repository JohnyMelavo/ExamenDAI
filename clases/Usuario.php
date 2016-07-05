<?php

/**
 * Description of Usuario
 *
 * @author X1005273
 */
class Usuario {

    private $sRun;
    private $sNombre;
    private $sAPaterno;
    private $sAMaterno;
    private $sPass;

    function __construct($sRun, $sNombre, $sAPaterno, $sAMaterno, $sPass) {
        $this->sRun = $sRun;
        $this->sNombre = $sNombre;
        $this->sAPaterno = $sAPaterno;
        $this->sAMaterno = $sAMaterno;
        $this->sPass = $sPass;
    }

    function getSRun() {
        return $this->sRun;
    }

    function getSNombre() {
        return $this->sNombre;
    }

    function getSAPaterno() {
        return $this->sAPaterno;
    }

    function getSAMaterno() {
        return $this->sAMaterno;
    }

    function getSPass() {
        return $this->sPass;
    }

    function setSRun($sRun) {
        $this->sRun = $sRun;
    }

    function setSNombre($sNombre) {
        $this->sNombre = $sNombre;
    }

    function setSAPaterno($sAPaterno) {
        $this->sAPaterno = $sAPaterno;
    }

    function setSAMaterno($sAMaterno) {
        $this->sAMaterno = $sAMaterno;
    }

    function setSPass($sPass) {
        $this->sPass = $sPass;
    }

    //COMIENZO DE MÉTODOS

    function VerificaUsuario() {
        $db = dbconnect();
        /* Definición del query que permitira ingresar un nuevo registro */
        $sqlsel = "select nombre from usuario
		where run=:run";
        /* Preparación SQL */
        $querysel = $db->prepare($sqlsel);
        /* Asignación de parametros utilizando bindparam */
        $querysel->bindParam(':run', $this->sRun);

        $datos = $querysel->execute();

        if ($querysel->rowcount() == 1)
            return true;
        else
            return false;
    }

    //READ DEL CRUD!
    function VerificaAcceso() { 
        $db = dbconnect();
        /* Definición del query que permitira ingresar un nuevo registro */
        $sqlsel = "select run,nombre,apaterno,amaterno,pass from usuario
		where run=:run and pass=:pwd";
        /* Preparación SQL */
        $querysel = $db->prepare($sqlsel);
        /* Asignación de parametros utilizando bindparam */
        $querysel->bindParam(':run', $this->sRun);
        $querysel->bindParam(':pwd', $this->sPass);


        $datos = $querysel->execute();

        if ($querysel->rowcount() == 1) {
            $registro = $querysel->fetch();
            $this->sRun = $registro['run'];
            $this->sNombre = $registro['nombre'];
            $this->sAPaterno = $registro['apaterno'];
            $this->sAMaterno = $registro['amaterno'];
            $this->sPass = $registro['pass'];
            return true;
        } else {
            return false;
        }
    }

    //CREATE DEL CRUD!
    function CreaCliente($sRun, $sNombre, $sAPaterno, $sAMaterno, $sPass) {
        $db = dbconnect();
        /* Definición del query que permitira ingresar un nuevo registro */
        $sqlsel = "INSERT INTO usuario (run,nombre,apaterno,amaterno,pass) VALUES (:run,:nombre,:apaterno,:amaterno,:pass)";
        /* Preparación SQL */
        $querysel = $db->prepare($sqlsel);
        /* Asignación de parametros utilizando bindparam */
        //:run,:nombre,:apaterno,:amaterno,:pass
        $querysel->bindParam(':run', $sRun);
        $querysel->bindParam(':nombre', $sNombre);
        $querysel->bindParam(':apaterno', $sAPaterno);
        $querysel->bindParam(':amaterno', $sAMaterno);
        $querysel->bindParam(':pass', $sPass);

        $datos = $querysel->execute();

        return $datos;
    }

    //UPDATE DE CLAVE
    function ActualizaClave($snewpwd) {
        $db = dbconnect();
        /* Definición del query que permitira actualizar la clave */
        $sqlupd = "update usuario
					set pass=:pwd
					where run=:id";

        /* Preparación SQL */
        $querysel = $db->prepare($sqlupd);

        /* Asignación de parametros utilizando bindparam */
        $querysel->bindParam(':pwd', md5($snewpwd));
        $querysel->bindParam(':id', $this->sRun);

        $valaux = $querysel->execute();

        return $valaux;
    }

    //UPDATE DEL CRUD!
    function ActualizaCliente($srun, $snom, $sapat, $samat, $snewpwd) {
        $db = dbconnect();
        /* Definición del query que permitira ingresar un nuevo registro */
        $sqlupd = "UPDATE usuario run=:run,nombre=:nombre,apaterno=:apaterno,amaterno=:amaterno,pass=:pass) where run=:run";
        /* Preparación SQL */
        $querysel = $db->prepare($sqlupd);
        /* Asignación de parametros utilizando bindparam */
        //:run,:nombre,:apaterno,:amaterno,:pass        
        //$querysel->bindParam(':run', $srun);
        $querysel->bindParam(':nombre', $snom);
        $querysel->bindParam(':apaterno', $sapat);
        $querysel->bindParam(':amaterno', $samat);
        $querysel->bindParam(':pass', md5($snewpwd));

        $valaux = $querysel->execute();

        return $valaux;
    }

    // DELETE DEL CRUD!
    function DeleteCliente($run) { 
        $db = dbconnect();
        /* Definición del query que permitira actualizar la clave */
        $sqlupd = "DELETE FROM usuario
					where run=:run";

        /* Preparación SQL */
        $querysel = $db->prepare($sqlupd);

        /* Asignación de parametros utilizando bindparam */
        $querysel->bindParam(':run', $run);

        $valaux = $querysel->execute();

        return $valaux;
    }

    //FIN DE METODOS
}
