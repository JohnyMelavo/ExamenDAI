<?php
include ('librerias.php');
session_start();

if (!isset($_SESSION["oUsuario"])) {
    ?>
    <script>
        document.location.href = "login.php";
    </script>
    <?php
} 
?>

<html>
    <head>
        <meta charset="UTF-8">
        <link href="../css/formoid-solid-green.css" rel="stylesheet" type="text/css">
        <title>Portal de usuario</title>
    </head>
    <body class="blurBg-true" style="background-color:#EBEBEB">
        <link rel="stylesheet" href="../css/formoid-solid-green.css" type="text/css">
        <script type="text/javascript" src="../js/jquery.min.js"></script>

        <?php
        require ('../form/formPostulacion.php');
        ?>
    </body>
</html>
