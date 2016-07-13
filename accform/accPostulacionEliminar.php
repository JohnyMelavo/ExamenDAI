<?php
include ('../presentacion/librerias.php');
$post=new Usuario();

foreach ($_POST as $rut){
	$post->DeleteCliente($rut);
};
?>

<script>
	document.location.href="<?=PATHURL?>index.php";
</script>