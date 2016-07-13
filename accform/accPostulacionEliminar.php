<?php
include ('../presentacion/librerias.php');
$post=new Usuario();
$rut = $_GET['srut'];
$post->DeleteCliente($rut);

?>

<script>
	document.location.href="<?=PATHURL?>index.php";
</script>