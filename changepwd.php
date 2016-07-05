<?php
include './librerias.php';
$usr = new Usuario();
?>
<html lang=''>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="js/md5/md5.js"></script>
    <body class="blurBg-true" style="background-color:#EBEBEB">
        <link rel="stylesheet" href="css/formoid-solid-green.css" type="text/css">
        <script type="text/javascript" src="js/jquery.min.js"></script>

        <?php
        require ('./form/formCambioPass.php');
        ?>

    </body>
</html>