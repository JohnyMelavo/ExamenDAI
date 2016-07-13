<?php
$usr = new Usuario();
$comuna = new Comunas();

?>
<form class="formoid-solid-green" style="background-color:#aaaaaa;font-size:10px;font-family:'Roboto',Arial,Helvetica,sans-serif;color:#34495E;max-width:840px;min-width:150px" 
      method="POST" action="../accform/accPostulacion.php">
    <div class="title">
        <h2>Ingreso de Postulación:</h2>
    </div>
    <!-- 
    rut
    nombre
    ap paterno
    ap materno
    fecha nac.
    sexo
    telefono
    email
    direccion
    comuna (despliega comunas stgo)
    educacion (despliega profesional, tecnico, media, basica, no posee)
    experiencia en programacion (si posee, debe ingresar cant. de años)
    modalidad (despliega diurna y vespertina)
    curso (despliega java, .net y php)
    -->
    <table>
        <tr>
            <td>RUN:</td>
            <td><input class="required" type="text" name="run" id="run" required="true" minlength="8" maxlength="8" style="max-width: 140px"> - <input class="required" style="max-width: 80px" type="text" name="run2" id="run2" required="true" minlength="1" maxlength="1"></td>
            <td>Dirección:</td>
            <td><input class="required" type="text" name="direccion" id="direccion" required="true"</td>
        </tr>
        <tr>
            <td>Nombre:</td>
            <td><input name="nombre" id="nombre" type="text" required="true"></td>
            <td>Comuna:</td>
            <td><select name="comunas">
            <?php
        while ($row = $comuna->Selecciona()) {
             '<option value="'.$row->getNId().'">'.$row->getSDescripcion().'</option>';
        }
            ?>
            </select></td>
        </tr>
        <tr>                     
            <td>Apellido Paterno:</td>
            <td><input name="appaterno" id="appaterno" type="text" required="true" ></td>
            <td>Educacion:</td>
            <td><input name="educacion" id="educacion" type="text" required="true"></td>
        </tr>
        <tr>
            <td>Apellido Materno:</td>
            <td><input name="apmaterno" id="apmaterno" type="text" required="true" ></td>
        </tr>
        <tr>
            <td>Fecha Nacimiento:</td>
            <td><input type="date" id="fechanacimiento" name="fechanacimiento" required="true"></td>
        </tr>
        <tr>
            <td>Sexo:</td>
            <td><input type="radio" id="sexo" name="sexo" value="M" required="true" checked>M 
            <input type="radio" id="sexo" name="sexo" value="F" required="true">F</td>
        </tr>
        <tr>
            <td>Telefono:</td>
            <td><input type="number" id="telefono" name="telefono" required="true" ></td>
        </tr>
        <tr>
            <td>Email:</td>
            <td><input type="email" id="mail" name="mail" required="true" placeholder="Ej: tucorreo@dominio.com"></td>
        </tr>
    </table>
    <div class="submit">
        <left>
            <input id="Volver" type="button" value="Volver" onclick="location.href = '../index.php'">
        </left>
        <input id="registrar" type="submit" value="Registrar">
    </div>
</form>

