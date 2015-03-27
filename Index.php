<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <link type="text/css" rel="stylesheet" href="bootstrap-3.2.0-dist/bootstrap-3.2.0-dist/css/bootstrap.css">
    <body>
       
        <br><br><br>
            <div class="container" style="padding-top: 1em;">
               <ul class="nav nav-tabs">
                   <li class="active"><a href="Index.php" style="text-decoration: none;">Inicio</a></li>
                   <li><a href="Usuarios.php" style="text-decoration: none;">Registro Usuario</a></li>
                  

</ul>  
            </div><br><br><br>
           
            <form class="form-horizontal" method="POST" action="Productos.php">
                        <div class="form-group">
                            <label for="usuario" class="col-sm-4 control-label">Documento</label>
                            <div class="col-sm-8">
                                <input type="text" name="usuario" id="pNombres" class="form-control" 
                                       placeholder="Ingrese Cedula" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="clave" class="col-sm-4 control-label">Contraseña</label>
                            <div class="col-sm-8">
                                <input type="text" name="clave" id="pApellidos" class="form-control" 
                                       placeholder="Ingrese su Clave" required>
                            </div>
                        </div>
                <div class="form-group">
                            <div class="col-sm-offset-4 col-sm-10">
                                <input type="submit" name="Ingresar" class="btn btn-success" 
                                       value="Registrar">
                            </div>
                        </div>
                    </form>
                
 <?php
        ?>
    </body>
</html>
