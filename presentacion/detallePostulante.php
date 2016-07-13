<?php
include 'librerias.php';
$post=new Usuario();
$rut = $_GET['srut'];

$post->LeerDatos($rut);

?>


<script>
    alert("Pagina en mantencion, disculpe las molestias");
    document.location.href = '../index.php' ;
</script>