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
    <body>
        <?php
        ?>
    <center>
        <h1>Bienvenido al portal de usuario</h1>
    </center>
</body>
</html>
