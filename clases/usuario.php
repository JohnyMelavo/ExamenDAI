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
    private $sEstado;
    private $querysel;

    function __construct($suId = NULL, $sRut = NULL, $sNombre = NULL, $sPass = NULL, $sAPaterno = NULL, $sAMaterno = NULL, $dFechaNac = NULL, $sSexo = NULL, $sTelefono = NULL, $sEmail = NULL, $sDireccion = NULL, $sIdComuna = NULL, $sEducacion = NULL, $bExperiencia = NULL, $nExperienciaAnios = NULL, $nModalidad = NULL, $nCurso = NULL, $dFechaCreacion = NULL, $sEstado = NULL) {
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
        $this->sEstado = $sEstado;
    }

    function getSEstado() {
        return $this->sEstado;
    }

    function setSEstado($sEstado) {
        $this->sEstado = $sEstado;
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

    //READ DEL CRUD! SOLO POSTULACIONES CERTIFICACIONES
    function SeleccionaPostulantes() {

        if (!$this->querysel) {
            $db = dbconnect();
            /* Definicion del query que permitira seleccionar los registros */

            $sqlsel = "select us.rut,us.nombre,es.descripcion from usuarios us join estadosolicitud es on (us.estado = es.id) where user_id > 12";


            /* Preparacion SQL */
            $this->querysel = $db->prepare($sqlsel);

            $this->querysel->execute();
        }

        $registro = $this->querysel->fetch();
        if ($registro) {
            return new self($registro['rut'], $registro['nombre'], $registro['descripcion']);
        } else {
            return false;
        }
    }

    // READ DEL CRUD!
    function LeerDatos($rot) {
        if (!$this->querysel) {
            $db = dbconnect();
            /* Definicion del query que permitira seleccionar los registros */


            $sqlsel = "select nombre,apellido_pat,apellido_mat,fecha_nacimiento,sexo,telefono,email,direccion from usuarios
		where rut=:run";
            /* Preparacion SQL */
            $this->querysel = $db->prepare($sqlsel);
            /* Asignación de parametros utilizando bindparam */
            $querysel->bindParam(':run', $rot);

            $this->querysel->execute();
        }

        $registro = $this->querysel->fetch();
        if ($registro) {
            return new self($registro['rut'], $registro['nombre'], $registro['descripcion']);
        } else {
            return false;
        }
    }

    function VerificaAcceso() {
        $db = dbconnect();
        /* Definición del query que permitira ingresar un nuevo registro */
        $sqlsel = "select rut,nombre,password,apellido_pat,apellido_mat,fecha_nacimiento,sexo,telefono,email,direccion from usuarios
		where rut=:run";
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
            $this->sPass = $registro['password'];
            $this->sAPaterno = $registro['apellido_pat'];
            $this->sAMaterno = $registro['apellido_mat'];
            $this->dFechaNac = $registro['fecha_nacimiento'];
            $this->sSexo = $registro['sexo'];
            $this->sTelefono = $registro['telefono'];
            $this->sEmail = $registro['email'];
            $this->sDireccion = $registro['direccion'];
            return true;
        } else {
            return false;
        }
    }

    //CREATE DEL CRUD!
    function CreaCliente($sRut, $sNombre, $sAPaterno, $sAMaterno, $sPass, $dFechaNac = NULL, $sSexo = NULL, $nTelefono = NULL, $sEmail = NULL, $sDireccion = NULL, $nIdComuna = NULL, $nEducacion = NULL, $bExperiencia = NULL, $nExperienciaAnios = NULL, $nModalidad = NULL, $nCurso = NULL) {
        $db = dbconnect();
        /* Definición del query que permitira ingresar un nuevo registro */
        $sqlsel = "INSERT INTO usuarios (rut,nombre,password,apellido_pat,apellido_mat,fecha_nacimiento,sexo,telefono,email,direccion,id_comuna,educacion,experiencia,experiencia_anios,modalidad,curso,estado) VALUES (:run,:nombre,:pass,:apaterno,:amaterno,:fechanac,:sexo,:telefono,:email,:direccion,:idcomuna,:educacion,:exper,:experanios,:modalidad,:curso,1)";
        /* Preparación SQL */
        $querysel = $db->prepare($sqlsel);
        /* Asignación de parametros utilizando bindparam */

        $querysel->bindParam(':run', $sRut);
        $querysel->bindParam(':nombre', $sNombre);
        $querysel->bindParam(':apaterno', $sAPaterno);
        $querysel->bindParam(':amaterno', $sAMaterno);
        $querysel->bindParam(':pass', $sPass);
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
        $sqlupd = "update usuarios
					set password=:pwd
					where rut=:id";

        /* Preparación SQL */
        $querysel = $db->prepare($sqlupd);

        /* Asignación de parametros utilizando bindparam */
        $querysel->bindParam(':pwd', $snewpwd);
        $querysel->bindParam(':id', $this->sRut);

        $valaux = $querysel->execute();

        return $valaux;
    }

    // FALTA ACTUALIZAR
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
