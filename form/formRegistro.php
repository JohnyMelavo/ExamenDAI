<?php
$usr = new Usuario();
?>

<center>
    <div class="frmd"><legend>Registro de usuario.</legend>            
        <table>
            <form action="../accform/accRegistro.php" method="POST">
                <!-- private $srun;
                private $snombre;
                private $apellidos;
                private $csexo;
                private $dfechanacimiento;
                private $semail;
                private $bSuscripcion;
                private $nTelefono;
                private $spass;
                -->
                <tr>
                    <td>RUN:</td>
                    <td><input name="run" id="run" type=text required="true"></td>
                    <td><input name="run2" id="run2" type=text required="true"></td>
                </tr>
                <tr>
                    <td>Nombre:</td>
                    <td><input name="nombre" id="nombre" type=text required="true"></td>
                    <td> </td>
                </tr>
                <tr>                       
                    <td>Apellidos:</td>
                    <td>Paterno:<input name="apellidos" id="apellidos" type="text" required="true" ></td>
                    <td>Materno:<input name="apellidos" id="apellidos" type="text" required="true" ></td>
                </tr>
                <tr>
                    <td>Contraseña:</td>
                    <td><input type="password" id="contraseña" name="contraseña" required="true"></td>
                    <td> </td>
                    <td>Repita Contraseña:</td>
                    <td><input type="password" id="contraseña" name="contraseña" required="true"></td>
                    <td> </td>
                </tr>  
                <tr>
                    <td>Desea suscribirse a nuestro boletín mensual?:</td>
                    <td>Si<input type="radio" id="suscripcion" name="suscripcion" checked="true" >
                        No<input type="radio" id="suscripcion" name="suscripcion"></td>
                    <td></td>
                </tr>  
                <tr>
                    <td></td>  
                    <td><input id="registrar" type="submit" value="Registrar"></td>
                </tr>
            </form>
        </table>
    </div>
</center>
