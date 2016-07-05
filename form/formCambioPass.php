<?php echo "Cambiar clave a:" . $usr->getSNombre(); ?>

<form class="formoid-solid-green" style="background-color:#aaaaaa;font-size:14px;font-family:'Roboto',Arial,Helvetica,sans-serif;color:#34495E;max-width:560px;min-width:150px" 
      method="POST" novalidate="novalidate">
    <div class="title">
        <h2>Ingrese sus datos:</h2>
    </div>
    <center>
        Clave Actual:<br>
        <input class="required" type="password" name="claveactual" id="claveactual" required="true"><br>
        Nueva Clave:<br>
        <input type="password" name="clavenueva" id="clavenueva" required="true"><br>
        Repetir Clave:<br>
        <input type="password" name="repetirclave" id="repetirclave" required="true"><br>
        <br>
    </center>
    <div class="button" id="mensaje">
        <input type="button" name="enviar" value ="Enviar" onclick="Cambiar()">
    </div>
</form>
<script>
    function Cambiar() {
        var clave;
        var claveactual = "<?= $oUsr->getSclave(); ?>";
        var dato = $("#claveactual").val();
        clave = CryptoJS.MD5(dato).toString();
        if (claveactual != clave) {
            alert("Clave actual no corresponde");
            return;
        }
        if ($("#clavenueva").val() != $("#repetirclave").val()) {
            alert("Su nueva clave no coincide");
            return;
        }

        $.ajax({
            url: 'accform/accUsuarioUPDClave.php',
            type: 'POST',
            data: "newpwd=" + CryptoJS.MD5($("#clavenueva").val()).toString(),
            success: function (datos) {
                alert("clave cambiada");
            }
        });
    }
</script>