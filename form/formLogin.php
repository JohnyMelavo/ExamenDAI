<form class="formoid-solid-green" style="background-color:#aaaaaa;font-size:14px;font-family:'Roboto',Arial,Helvetica,sans-serif;color:#34495E;max-width:560px;min-width:150px" 
      method="POST" action="../accform/accLogin.php" >
    <div class="title">
        <h2>Portal de acceso</h2>
    </div>
    <table>
        <tr>
            <td>RUN:</td>
            <td><input class="required" type="text" name="run" id="run" required="true" minlength="8" maxlength="8" style="max-width: 140px"> - <input class="required" style="max-width: 80px" type="text" name="run2" id="run2" required="true" minlength="1" maxlength="1"></td>
        </tr>              
        <tr>
            <td>Clave:</td>
            <td><input class="required" type="password" name="clave" id="clave" required="true"></td>
        </tr>
    </table>
    <center>
        <input class="submit" type="submit" value="Ingresar"><input type="button" value="Registrar" onclick="location.href = '../presentacion/registroUsuario.php'">
    </center>
</form>
