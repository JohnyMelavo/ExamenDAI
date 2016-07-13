<div class="divider" style="text-align: right">
    <?php echo "Bienvenido/a: " . $usr->getSNombre() . " " . $usr->getSAPaterno() . " " . $usr->getSAMaterno(); ?>
</div>
<form class="formoid-solid-green" style="background-color:#aaaaaa;font-size:14px;font-family:'Roboto',Arial,Helvetica,sans-serif;color:#34495E;max-width:560px;min-width:150px">
    <div class="title">
        <h2>Bienvenido al portal de postulaciones.</h2>
    </div>
    <br>
    <br>    
    <div class="submit">
        <center>
            <input type="button" value="Portal de Postulacion" onclick="location.href = 'presentacion/postulacion.php'">
            <input type="button" value="Cambiar Contraseña" onclick="location.href = 'presentacion/changepwd.php'"><br>
            <input type="button" value="Cerrar Sesión" onclick="location.href = 'presentacion/logout.php'">
        </center>
        
    </div>
    <br>
</form>