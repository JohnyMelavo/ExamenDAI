<?php
include 'librerias.php';
session_start();
$usr = new Usuario();

if (!isset($_SESSION["oUsuario"])) {
    ?>
    <script>
        document.location.href = "login.php";
    </script>
    <?php
}else{
    $usr = $_SESSION["oUsuario"];
    echo $usr->getSNombre();
}
?>
<html lang=''>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="../js/md5/sha1.js"></script>
    <body class="blurBg-true" style="background-color:#EBEBEB">
        <link rel="stylesheet" href="../css/formoid-solid-green.css" type="text/css">
        <script type="text/javascript" src="../js/jquery.min.js"></script>

        <?php
        require ('../form/formCambioPass.php');
        ?>

    </body>
</html>