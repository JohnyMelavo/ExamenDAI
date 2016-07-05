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
		where email=:email";
        /* Preparación SQL */
        $querysel = $db->prepare($sqlsel);
        /* Asignación de parametros utilizando bindparam */
        $querysel->bindParam(':email', $this->semail);

        $datos = $querysel->execute();

        if ($querysel->rowcount() == 1)
            return true;
        else
            return false;
    }

    function VerificaAcceso() { //READ DEL CRUD!
        $db = dbconnect();
        /* Definición del query que permitira ingresar un nuevo registro */
        $sqlsel = "select email,runusuario,nombre,apellido,sexo,fechanacimiento,telefono,suscripcion,pass from usuario
		where email=:email and pass=:pwd";
        /* Preparación SQL */
        $querysel = $db->prepare($sqlsel);
        /* Asignación de parametros utilizando bindparam */
        $querysel->bindParam(':email', $this->semail);
        $querysel->bindParam(':pwd', $this->spass);


        $datos = $querysel->execute();

        if ($querysel->rowcount() == 1) {
            $registro = $querysel->fetch();
            $this->snombre = $registro['nombre'];
            $this->apellidos = $registro['apellido'];
            $this->ssexo = $registro['sexo'];
            $this->dfechanacimiento = $registro['fechanacimiento'];
            $this->nTelefono = $registro['telefono'];
            $this->semail = $registro['email'];
            $this->bSuscripcion = $registro['suscripcion'];
            $this->spass = $registro['pass'];
            $this->srun = $registro['runusuario'];
            return true;
        } else {
            return false;
        }
    }

    function CreaCliente($semail, $srun, $snombre, $apellidos, $ssexo, $dfechanacimiento, $nTelefono, $bSuscripcion, $spass) { //CREATE DEL CRUD!
        $db = dbconnect();
        /* Definición del query que permitira ingresar un nuevo registro */
        $sqlsel = "INSERT INTO usuario (email,runusuario,nombre,apellido,sexo,fechanacimiento,telefono,suscripcion,pass) VALUES (:email,:run,:nombre,:apellido,:sexo,:fecha,:telefono,:suscripcion,:pass)";
        /* Preparación SQL */
        $querysel = $db->prepare($sqlsel);
        /* Asignación de parametros utilizando bindparam */
        //:email,:run,:nombre,:apellido,:sexo,:fecha,:telefono,:suscripcion,:pass
        $querysel->bindParam(':email', $semail);
        $querysel->bindParam(':run', $srun);
        $querysel->bindParam(':nombre', $snombre);
        $querysel->bindParam(':apellido', $apellidos);
        $querysel->bindParam(':sexo', $ssexo);
        $querysel->bindParam(':fecha', $dfechanacimiento);
        $querysel->bindParam(':telefono', $nTelefono);
        $querysel->bindParam(':suscripcion', $bSuscripcion);
        $querysel->bindParam(':pass', $spass);


        $datos = $querysel->execute();

        return $datos;
    }

    function ActualizaClave($snewpwd) {
        $db = dbconnect();
        /* Definición del query que permitira actualizar la clave */
        $sqlupd = "update usuario
					set pass=:pwd
					where email=:id";

        /* Preparación SQL */
        $querysel = $db->prepare($sqlupd);

        /* Asignación de parametros utilizando bindparam */
        $querysel->bindParam(':pwd', md5($snewpwd));
        $querysel->bindParam(':id', $this->semail);

        $valaux = $querysel->execute();

        return $valaux;
    }

    function ActualizaCliente($srun, $snombre, $sapel, $ses, $sfec, $ntel, $bool, $snewpwd) { //UPDATE DEL CRUD!
        $db = dbconnect();
        /* Definición del query que permitira ingresar un nuevo registro */
        $sqlupd = "UPDATE usuario runusuario=:run,nombre=:nombre,apellido=:apellido,sexo=:sexo,fechanacimiento=:fecha,telefono=:telefono,suscripcion=:suscripcion,pass=:pass) where email=:email";
        /* Preparación SQL */
        $querysel = $db->prepare($sqlupd);
        /* Asignación de parametros utilizando bindparam */
        //:email,:run,:nombre,:apellido,:sexo,:fecha,:telefono,:suscripcion,:pass
        $querysel->bindParam(':email', $this->semail);
        $querysel->bindParam(':run', $srun);
        $querysel->bindParam(':nombre', $snombre);
        $querysel->bindParam(':apellido', $sapel);
        $querysel->bindParam(':sexo', $ses);
        $querysel->bindParam(':fecha', $sfec);
        $querysel->bindParam(':telefono', $ntel);
        $querysel->bindParam(':suscripcion', $bool);
        $querysel->bindParam(':pass', md5($snewpwd));


        $valaux = $querysel->execute();

        return $valaux;
    }

    function DeleteCliente($email) { // DELETE DEL CRUD!
        $db = dbconnect();
        /* Definición del query que permitira actualizar la clave */
        $sqlupd = "DELETE FROM usuario
					where email=:email";

        /* Preparación SQL */
        $querysel = $db->prepare($sqlupd);

        /* Asignación de parametros utilizando bindparam */
        $querysel->bindParam(':email', $email);

        $valaux = $querysel->execute();

        return $valaux;
    }

    //FIN DE METODOS
}
