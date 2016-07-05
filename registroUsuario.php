<?php
session_start();
include 'librerias.php';
?>
<html>
    <head>
        <meta charset="utf-8">
        <title>Portal de Registro</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body class="blurBg-true" style="background-color:#EBEBEB">
        <link rel="stylesheet" href="css/formoid-solid-green.css" type="text/css">
        <script type="text/javascript" src="js/jquery.min.js"></script>
        <?php
        require ('./form/formRegistro.php');
        ?>
    </body>
</html>