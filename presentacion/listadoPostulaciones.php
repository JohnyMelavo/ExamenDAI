<?php
session_start();
include 'librerias.php';
$usr=new Usuario();
?>
<form method="post" action="">
<?php
While($datos=$usr->SeleccionaPostulantes()){
	?>
    <input type="text" readonly="true" name="rut" value="<?=$datos->getSuId()?>">
    <input type="text" readonly="true" name="nombre" value="<?=$datos->getSRut() ?>">
    <input type="text" readonly="true" name="estado" value="<?=$datos->getSNombre() ?>">
    <input type="button" value="Ver">
    <input type="button" value="Editar">
    <a href="../accform/accPostulacionEliminar.php?srut=<?=$datos->getSuId()?>">Eliminar</a>
    
<br>
<?php
}
?>

</form>