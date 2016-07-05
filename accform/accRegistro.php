<?php
include ('./librerias.php');
$usr = new Usuario();
$srun = $_POST['run'];
$snombre = $_POST['nombre'];
$sapaterno = $_POST['apaterno'];
$samaterno = $_POST['amaterno'];
$spass = md5($_POST['contraseña']);
$usr->CreaCliente($srun, $snombre, $sapaterno, $samaterno, $spass=="on"?true:false);

//include '../registromail.php';
?>
<script>
    alert('Se ha registrado con éxito!');
    document.location.href = "<?= PATHURL ?>index.php";
</script>