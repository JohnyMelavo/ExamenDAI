<?php

/**
 * Description of Usuario
 *
 * @author Joseph Perez Carmona
 */
class Usuario {

    private $suId;
    private $sRut;
    private $sNombre;
    private $sPass;
    private $sAPaterno;
    private $sAMaterno;
    private $dFechaNac;
    private $sSexo;
    private $sTelefono;
    private $sEmail;
    private $sDireccion;
    private $sIdComuna;
    private $sEducacion;
    private $bExperiencia;
    private $nExperienciaAnios;
    private $nModalidad;
    private $nCurso;
    private $dFechaCreacion;

    function __construct($suId = NULL, $sRut = NULL, $sNombre = NULL, $sPass = NULL, $sAPaterno = NULL, $sAMaterno = NULL, $sAPaterno = NULL, $dFechaNac = NULL, $sSexo = NULL, $sTelefono = NULL, $sEmail = NULL, $sDireccion = NULL, $sIdComuna = NULL, $sEducacion = NULL, $bExperiencia = NULL, $nExperienciaAnios = NULL, $nModalidad = NULL, $nCurso = NULL, $dFechaCreacion = NULL) {
        $this->suId = $suId;
        $this->sRut = $sRut;
        $this->sNombre = $sNombre;
        $this->sPass = $sPass;
        $this->sAPaterno = $sAPaterno;
        $this->sAMaterno = $sAMaterno;
        $this->dFechaNac = $dFechaNac;
        $this->sSexo = $sSexo;
        $this->sTelefono = $sTelefono;
        $this->sEmail = $sEmail;
        $this->sDireccion = $sDireccion;
        $this->sIdComuna = $sIdComuna;
        $this->sEducacion = $sEducacion;
        $this->bExperiencia = $bExperiencia;
        $this->nExperienciaAnios = $nExperienciaAnios;
        $this->nModalidad = $nModalidad;
        $this->nCurso = $nCurso;
        $this->dFechaCreacion = $dFechaCreacion;
    }

    function getSuId() {
        return $this->suId;
    }

    function getSRut() {
        return $this->sRut;
    }

    function getSNombre() {
        return $this->sNombre;
    }

    function getSPass() {
        return $this->sPass;
    }

    function getSAPaterno() {
        return $this->sAPaterno;
    }

    function getSAMaterno() {
        return $this->sAMaterno;
    }

    function getDFechaNac() {
        return $this->dFechaNac;
    }

    function getSSexo() {
        return $this->sSexo;
    }

    function getSTelefono() {
        return $this->sTelefono;
    }

    function getSEmail() {
        return $this->sEmail;
    }

    function getSDireccion() {
        return $this->sDireccion;
    }

    function getSIdComuna() {
        return $this->sIdComuna;
    }

    function getSEducacion() {
        return $this->sEducacion;
    }

    function getBExperiencia() {
        return $this->bExperiencia;
    }

    function getNExperienciaAnios() {
        return $this->nExperienciaAnios;
    }

    function getNModalidad() {
        return $this->nModalidad;
    }

    function getNCurso() {
        return $this->nCurso;
    }

    function getDFechaCreacion() {
        return $this->dFechaCreacion;
    }

    function setSuId($suId) {
        $this->suId = $suId;
    }

    function setSRut($sRut) {
        $this->sRut = $sRut;
    }

    function setSNombre($sNombre) {
        $this->sNombre = $sNombre;
    }

    function setSPass($sPass) {
        $this->sPass = $sPass;
    }

    function setSAPaterno($sAPaterno) {
        $this->sAPaterno = $sAPaterno;
    }

    function setSAMaterno($sAMaterno) {
        $this->sAMaterno = $sAMaterno;
    }

    function setDFechaNac($dFechaNac) {
        $this->dFechaNac = $dFechaNac;
    }

    function setSSexo($sSexo) {
        $this->sSexo = $sSexo;
    }

    function setSTelefono($sTelefono) {
        $this->sTelefono = $sTelefono;
    }

    function setSEmail($sEmail) {
        $this->sEmail = $sEmail;
    }

    function setSDireccion($sDireccion) {
        $this->sDireccion = $sDireccion;
    }

    function setSIdComuna($sIdComuna) {
        $this->sIdComuna = $sIdComuna;
    }

    function setSEducacion($sEducacion) {
        $this->sEducacion = $sEducacion;
    }

    function setBExperiencia($bExperiencia) {
        $this->bExperiencia = $bExperiencia;
    }

    function setNExperienciaAnios($nExperienciaAnios) {
        $this->nExperienciaAnios = $nExperienciaAnios;
    }

    function setNModalidad($nModalidad) {
        $this->nModalidad = $nModalidad;
    }

    function setNCurso($nCurso) {
        $this->nCurso = $nCurso;
    }

    function setDFechaCreacion($dFechaCreacion) {
        $this->dFechaCreacion = $dFechaCreacion;
    }

    //COMIENZO DE MÉTODOS

    function VerificaUsuario() {
        $db = dbconnect();
        /* Definición del query que permitira ingresar un nuevo registro */
        $sqlsel = "select nombre from usuarios
		where rut=:run";
        /* Preparación SQL */
        $querysel = $db->prepare($sqlsel);
        /* Asignación de parametros utilizando bindparam */
        $querysel->bindParam(':run', $this->sRun);

        $querysel->execute();

        if ($querysel->rowcount() == 1) {
            return true;
        } else {
            return false;
        }
    }

    //READ DEL CRUD!
    function VerificaAcceso() {
        $db = dbconnect();
        /* Definición del query que permitira ingresar un nuevo registro */
        $sqlsel = "select rut,nombre,password,apellido_pat,apellido_mat from usuarios
		where rut=:run and password=:pwd";
        /* Preparación SQL */
        $querysel = $db->prepare($sqlsel);
        /* Asignación de parametros utilizando bindparam */
        $querysel->bindParam(':run', $this->sRut);
        $querysel->bindParam(':pwd', $this->sPass);


        $querysel->execute();

        if ($querysel->rowcount() == 1) {
            $registro = $querysel->fetch();
            $this->sRut = $registro['rut'];
            $this->sNombre = $registro['nombre'];
            $this->sPass = $registro['apellido_pat'];
            $this->sAPaterno = $registro['apellido_mat'];
            $this->sAMaterno = $registro['password'];
            return true;
        } else {
            return false;
        }
    }

    //CREATE DEL CRUD!
    function CreaCliente($sRut, $sNombre, $sPass, $sAPaterno, $sAMaterno, $dFechaNac, $sSexo, $nTelefono, $sEmail, $sDireccion, $nIdComuna, $nEducacion, $bExperiencia, $nExperienciaAnios, $nModalidad, $nCurso) {
        $db = dbconnect();
        /* Definición del query que permitira ingresar un nuevo registro */
        $sqlsel = "INSERT INTO usuarios (rut,nombre,password,apellido_pat,apellido_mat,fecha_nacimiento,sexo,telefono,email,direccion,id_comuna,educacion,experiencia,experiencia_anios,modalidad,curso) VALUES (:run,:nombre,:pass,:apaterno,:amaterno,:fechanac,:sexo,:telefono,:email,:direccion,:idcomuna,:educacion,:exper,:experanios,:modalidad,:curso)";
        /* Preparación SQL */
        $querysel = $db->prepare($sqlsel);
        /* Asignación de parametros utilizando bindparam */
        
        $querysel->bindParam(':run', $sRut);
        $querysel->bindParam(':nombre', $sNombre);
        $querysel->bindParam(':pass', $sPass);
        $querysel->bindParam(':apaterno', $sAPaterno);
        $querysel->bindParam(':amaterno', $sAMaterno);
        $querysel->bindParam(':fechanac', $dFechaNac);
        $querysel->bindParam(':sexo', $sSexo);
        $querysel->bindParam(':telefono', $nTelefono);
        $querysel->bindParam(':email', $sEmail);
        $querysel->bindParam(':direccion', $sDireccion);
        $querysel->bindParam(':idcomuna', $nIdComuna);
        $querysel->bindParam(':educacion', $nEducacion);
        $querysel->bindParam(':exper', $bExperiencia);
        $querysel->bindParam(':experanios', $nExperienciaAnios);
        $querysel->bindParam(':modalidad', $nModalidad);
        $querysel->bindParam(':curso', $nCurso);

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
        $querysel->bindParam(':run', $srun);
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
        $sqlupd = "DELETE FROM usuarios
					where rut=:run";

        /* Preparación SQL */
        $querysel = $db->prepare($sqlupd);

        /* Asignación de parametros utilizando bindparam */
        $querysel->bindParam(':run', $run);

        $valaux = $querysel->execute();

        return $valaux;
    }

    //FIN DE METODOS
}
