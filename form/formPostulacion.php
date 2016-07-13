<div class="divider" style="text-align: right">
    <?php echo "Cambiar clave a: " . $usr->getSNombre() . " " . $usr->getSAPaterno() . " " . $usr->getSAMaterno(); ?>
</div>
    <?php
$usr = new Usuario();
$comuna = new Comunas();
$educacion = new educacion();
$curso = new curso;
$modalidad = new modalidad();
?>
<form class="formoid-solid-green" style="background-color:#aaaaaa;font-size:10px;font-family:'Roboto',Arial,Helvetica,sans-serif;color:#34495E;max-width:840px;min-width:150px" 
      method="POST" action="../accform/accPostulacion.php">
    <div class="title">
        <h2>Ingreso de Postulación:</h2>
    </div>
    <table>
        <tr>
            <td>RUN:</td>
            <td><input class="required" type="text" name="run" id="run" required="true" minlength="7" maxlength="8" style="max-width: 80px"> - <input class="required" style="max-width: 20px" type="text" name="run2" id="run2" required="true" minlength="1" maxlength="1"></td>
            <td>Dirección:</td>
            <td><input class="required" type="text" name="direccion" id="direccion" required="true"</td>
        </tr>
        <tr>
            <td>Nombre:</td>
            <td><input name="nombre" id="nombre" type="text" required="true"></td>
            <td>Comuna:</td>
            <td><select name="comuna" id="comuna">
                    <?php
                    while ($row = $comuna->Selecciona()) {
                        ?><option value="<?= $row->getNId() ?>"> <?= $row->getSDescripcion() ?></option><?php
                    }
                    ?>
                </select></td>
        </tr>
        <tr>                     
            <td>Apellido Paterno:</td>
            <td><input name="appaterno" id="appaterno" type="text" required="true" ></td>
            <td>Educacion:</td>
            <td><select name="educacion" id="educacion">
                    <?php
                    while ($row = $educacion->Selecciona()) {
                        ?><option value="<?= $row->getNId() ?>"> <?= $row->getSDescripcion() ?></option><?php
                    }
                    ?>
                </select></td>
        </tr>
        <tr>
            <td>Apellido Materno:</td>
            <td><input name="apmaterno" id="apmaterno" type="text" required="true" ></td>
            <td><input type="checkbox" name="experiencia" id="experiencia"> Experiencia Laboral en el area de Programacion</td>
        </tr>
        <tr>
            <td>Fecha Nacimiento:</td>
            <td><input type="date" id="fechanacimiento" name="fechanacimiento" required="true"></td>

            <td><div id="expaniosDiv" hidden="true">
                    Ingrese Cantidad de años <input type="number" id="expanios" min="1" max="50">
                </div>
            </td>
        </tr>
        <tr>
            <td>Sexo:</td>
            <td><input type="radio" id="sexo" name="sexo" value="M" required="true" checked>M 
                <input type="radio" id="sexo" name="sexo" value="F" required="true">F</td>
            <td>Modalidad y Curso al que postula</td>
        </tr>
        <tr>
            <td>Telefono:</td>
            <td><input type="tel" id="telefono" name="telefono" required="true" ></td>
            <td>Modalidad: </td>
            <td><select name="modalidad" id="modalidad">
                    <?php
                    while ($row = $modalidad->Selecciona()) {
                        ?><option value="<?= $row->getNId() ?>"> <?= $row->getSDescripcion() ?></option><?php
                    }
                    ?>
                </select></td>
        </tr>
        <tr>
            <td>Email:</td>
            <td><input type="email" id="mail" name="mail" required="true" placeholder="Ej: tucorreo@dominio.com"></td>
            <td>Curso: </td>
            <td><select name="curso" id="curso">
                    <?php
                    while ($row = $curso->Selecciona()) {
                        ?><option value="<?= $row->getNId() ?>"> <?= $row->getSDescripcion() ?></option><?php
                    }
                    ?>
                </select></td>
        </tr>
    </table>
    <div class="submit">
        <left>
            <input id="Volver" type="button" value="Volver" onclick="location.href = '../index.php'">
        </left>
        <input id="registrar" type="submit" value="Registrar">
    </div>
</form>

<script>
    var checkbox = document.getElementById("experiencia");
    var firstDiv = document.getElementById("expaniosDiv");
    checkbox.onclick = function () {
        if (checkbox.checked) {
            firstDiv.style.display = "block";
            firstDiv.hidden = "false";
        } else {
            firstDiv.style.display = "none";
            firstDiv.hidden = "true";
        }
    }
</script>
