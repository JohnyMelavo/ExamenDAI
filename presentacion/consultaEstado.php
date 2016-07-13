<?php
include 'librerias.php';

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
        <title></title>
    </head>
    <body>
        <!--
        Se debe ingresar rut para verificar la informacion a continuacion.
        -
        -
        Se deben mostrar los sgtes mensajes segun el caso:
        **Caso (estado pendiente)= "Estado de solicitud: Pendiente"
        **Caso (estado aprobado)= "Estado de solicitud: Aprobado"
        **Caso (estado rechazado)= "Estado de solicitud: Rechazado"
        
        "Para mas informacion puede llamarnos al numero que aparece en nuestra página oficial"
        
        -->
        <?php
        // put your code here
        ?>
    </body>
</html>
