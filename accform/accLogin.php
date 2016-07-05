<?php
include ('../librerias.php');
$usr = new Cliente("", "", "", "", "", $_POST['usuario'], "", "", $_POST["clave"]);

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

