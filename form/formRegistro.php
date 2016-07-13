<?php
$usr = new Usuario();
?>
<form class="formoid-solid-green" style="background-color:#aaaaaa;font-size:12px;font-family:'Roboto',Arial,Helvetica,sans-serif;color:#34495E;max-width:560px;min-width:150px" 
      method="POST" action="../accform/accRegistro.php">
    <div class="title">
        <h2>Registro de usuario:</h2>
    </div>
    <!-- 
    private $sRun;
    private $sNombre;
    private $sAPaterno;
    private $sAMaterno;
    private $sPass;
    -->
    <table>
        <tr>
            <td>RUN:</td>
            <td><input class="required" type="text" name="run" id="run" required="true" minlength="7" maxlength="8" style="max-width: 140px"> - <input class="required" style="max-width: 80px" type="text" name="run2" id="run2" required="true" minlength="1" maxlength="1"></td>
        </tr>   
        <tr>
            <td>Nombre:</td>
            <td><input name="nombre" id="nombre" type=text required="true" onclick="Rut(run)"></td>
            <td> </td>
        </tr>
        <tr>                     
            <td>Apellido Paterno:</td>
            <td><input name="apaterno" id="apaterno" type="text" required="true" ></td>
        </tr>
        <tr>
            <td>Apellido Materno:</td>
            <td><input name="amaterno" id="amaterno" type="text" required="true" ></td>
        </tr>
        <tr>
            <td>Contraseña:</td>
            <td><input type="password" id="contraseña1" name="contraseña1" required="true"></td>
            <td> </td>
        </tr>
        <tr>
            <td>Repita Contraseña:</td>
            <td><input type="password" id="contraseña2" name="contraseña2" required="true"></td>
            <td> </td>
        </tr>
    </table>
    <div class="submit">
        <left>
            <input id="Volver" type="button" value="Volver" onclick="location.href = '../index.php'">
        </left>
        <input id="registrar" type="submit" onclick="validarPW()" value="Registrar">
    </div>           
</form>

<script>
    function validarPW() {
        var contraseña1;
        var contraseña2;
        if ($("#contraseña1").val() !== $("#contraseña2").val()) {
            alert("Su clave no coincide");
            document.location.href = "<?= PATHURL ?>presentacion/registroUsuario.php";
            return;
        }
    }
</script>