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
            <td><input class="required" type="text" name="run" id="run" required="true" minlength="8" maxlength="8" style="max-width: 140px"> - <input class="required" style="max-width: 80px" type="text" name="run2" id="run2" required="true" minlength="1" maxlength="1"></td>
        </tr>
        <tr>
            <td>Nombre:</td>
            <td><input name="nombre" id="nombre" type=text required="true"></td>
            <td> </td>
        </tr>
        <tr>                     
            <td>Apellido Paterno:</td>
            <td><input name="apellidos" id="apellidos" type="text" required="true" ></td>
        </tr>
        <tr>
            <td>Apellido Materno:</td>
            <td><input name="apellidos" id="apellidos" type="text" required="true" ></td>
        </tr>
        <tr>
            <td>Contraseña:</td>
            <td><input type="password" id="contraseña" name="contraseña" required="true"></td>
            <td> </td>
        </tr>
        <tr>
            <td>Repita Contraseña:</td>
            <td><input type="password" id="contraseña" name="contraseña" required="true"></td>
            <td> </td>
        </tr>  
        <tr><br>
        <td>Desea suscribirse?:</td>
        <td><input type="radio" id="suscripcion" value="yes" name="suscripcion" checked="true" >Si</td>
        <td><input type="radio" id="suscripcion" name="suscripcion">No</td>
        </tr>
    </table>
    <div class="submit">
        <input id="registrar" type="submit" value="Registrar">
    </div>
</form>