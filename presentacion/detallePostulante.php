<?php
include 'librerias.php';
$post=new Usuario();
$rut = $_GET['srut'];
$post->DeleteCliente($rut);

?>
