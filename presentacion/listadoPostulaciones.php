<?php
session_start();
include 'librerias.php';
$usr=new Usuario();
While($datos=$usr->SeleccionaPostulantes()){
	?>
    <input type="text" readonly="true" name="rut" value="<?=$datos->getSuId()?>">
    <input type="text" readonly="true" name="nombre" value="<?=$datos->getSRut() ?>">
    <input type="text" readonly="true" name="estado" value="<?=$datos->getSNombre() ?>">
    <a href="./detallePostulante.php?srut=<?=$datos->getSuId()?>">Ver</a>
    <a href="../accform/accPostulacionEliminar.php?srut=<?=$datos->getSuId()?>">Editar</a>
    <a href="../accform/accPostulacionEliminar.php?srut=<?=$datos->getSuId()?>">Eliminar</a>
    
<br>
<?php
}
?>