<?php
// JONA LEE ESTO: CUANDO INGRESES AQUI, COLOCA QUE LA CLAVE DEL USUARIO ES 0 SOLAMENTE ESO.
include ('../presentacion/librerias.php');
$usr = new Usuario();
$rut = $_POST['run'] . $_POST['run2'];
$direccion = $_POST['direccion'];
$snombre = $_POST['nombre'];
$comuna = $_POST['comuna'];
$sapaterno = $_POST['appaterno'];
$educacion = $_POST['educacion'];
$samaterno = $_POST['apmaterno'];
$fechanac = $_POST['fechanacimiento'];
$exper = $_POST['experiencia'];
if($exper === 1){
    $experanios = $_POST['expanios'];
} else {
    $experanios = 0;
}
$sexo = $_POST['sexo'];
$fono = $_POST['telefono'];
$modal = $_POST['modalidad'];
$curso = $_POST['curso'];
$email = $_POST['mail'];
$spass = "0";
if($usr->CreaCliente($rut, $snombre, $spass, $sapaterno, $samaterno, $fechanac, $sexo, $fono, $email, $direccion, $comuna, $educacion, $exper==1? true : false, $experanios, $modal, $curso)){
    ?>
<script>
    alert('Se ha registrado con éxito!');
    document.location.href = "<?= PATHURL ?>index.php";
</script>
<?php } else{
    ?> 
<script>
    alert('Servidor ocupado, intente nuevamente mas tarde!');
    document.location.href = "<?= PATHURL ?>index.php";
</script>
        <?php
}
?>