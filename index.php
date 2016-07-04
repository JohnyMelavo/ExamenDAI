<html>
    <head>
        <meta charset="utf-8">
        <title>Portal de acceso - Formoid html form</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body class="blurBg-true" style="background-color:#EBEBEB">



        <!-- Start Formoid form-->
        <link rel="stylesheet" href="css/formoid-solid-green.css" type="text/css">
        <script type="text/javascript" src="js/jquery.min.js"></script>
        <form class="formoid-solid-green" style="background-color:#aaaaaa;font-size:14px;font-family:'Roboto',Arial,Helvetica,sans-serif;color:#34495E;max-width:560px;min-width:150px" method="post" novalidate="novalidate"><div class="title"><h2>Portal de acceso</h2></div>
            <table>
                <tr>
                    <td>RUN:</td>
                    <td><input type="text" name="run" id="run" required="true"></td>
                    <td>-<input type="text" name="run2" id="run2" required="true"></td>
                </tr>                
                <tr>
                    <td>Clave:</td>
                    <td><input type="password" name="clave" id="clave" required="true"></td>
                </tr>
            </table>
            <div class="submit"><input type="submit" value="Ingresar"><input type="button" name="registro" id="registro" onclick=""></div>

        </form>

    </body>
</html>