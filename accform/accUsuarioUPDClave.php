<?php

include ('../presentacion/librerias.php');
$newpewd = $_GET['newpwd'];
session_start();

if (!isset($_SESSION["oUsuario"])) {
    ?>
    <script>
        document.location.href = "index.php";
    </script>
    <?php

}

$usr = $_SESSION["oUsuario"];
var_dump($usr);

if ($usr->ActualizaClave($newpewd)) {
    ?>
    <script>
        alert('Clave actualizada exitosamente');
    </script>
    <?php

} else {
    ?>
    <script>
        alert('Ha ocurrido un error');
    </script>
    <?php

}
?>