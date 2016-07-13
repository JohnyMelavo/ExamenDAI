<?php
session_start();
include 'librerias.php';

if (isset($_SESSION["oUsuario"])) {
    ?>
    <script>
        document.location.href = "../index.php";
    </script>
    <?php
}
?>


<html>
    <head>
        <meta charset="utf-8">
        <title>Portal de acceso</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body class="blurBg-true" style="background-color:#EBEBEB">
        <link rel="stylesheet" href="../css/formoid-solid-green.css" type="text/css">
        <script type="text/javascript" src="../js/jquery.min.js"></script>
        <?php
        require ('../form/formLogin.php');
        ?>
    </body>
</html>