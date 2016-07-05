<?php
include ('librerias.php');

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
        <link href="css/formoid-solid-green.css" rel="stylesheet" type="text/css">
        <title>Portal de usuario</title>
    </head>
    <body class="blurBg-true" style="background-color:#EBEBEB">
        <link rel="stylesheet" href="css/formoid-solid-green.css" type="text/css">
        <script type="text/javascript" src="js/jquery.min.js"></script>

        <form class="formoid-solid-green" style="background-color:#aaaaaa;font-size:14px;font-family:'Roboto',Arial,Helvetica,sans-serif;color:#34495E;max-width:560px;min-width:150px">
            <div class="title">
                <h2>Bienvenido al portal de postulaciones.</h2>
            </div>
            <br>
            <br>            
            <center>
                <input type="button" value="Portal de Postulacion" onclick="location.href = './postulacion.php'"><input type="button" value="Cambiar Contraseña" onclick="location.href = './changepwd.php'">
            </center>
            <br>
        </form>
    </body>
</html>
