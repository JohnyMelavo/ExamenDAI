<?php
include ('../presentacion/librerias.php');
$claveSHA = sha1($_POST['clave']);
$rut = $_POST['run']+$_POST['run2'];
$usr = new Usuario("", $rut, "", $claveSHA, "", "", '1990-05-01', '', 0, "", "", 12, 1, 0, 3, 1, 2, '1900-01-01');

session_start();

if ($usr->VerificaAcceso()) {
    $_SESSION["oUsuario"] = $usr;
    ?>
    <script>
        document.location.href = "<?= PATHURL ?>index.php";
    </script>
    <?php
} else {
    ?>
    <script type="text/javascript">
        alert("Usuario o contraseña incorrectos. Favor intente nuevamente...");
        document.location.href = "<?= PATHURL ?>login.php";
    </script>    
    <?php
}
?>

