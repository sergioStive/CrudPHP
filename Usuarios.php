<?php
require 'DAO/UsuariosDAO.php';
require 'DTO/UsuariosDTO.php';
if(isset($_POST['Registrar']))
   
{  
        $prov = new UsuariosDAO();
        $dto =new UsuariosDTO();
        
        $dto->setIdUsuario($_POST['usuario']);
        $dto->setNombres($_POST['nombre']);
        $dto->setApellidos($_POST['apellido']); 
        $dto->setContraseña($_POST['clave']);
        $dto->setEmail($_POST['correo']);       
        
        $prov->crearUsuario($dto);
    
}

else if(isset($_POST['actualizar']))
{
    
}
 else {
?>
        <html>
        <head>

            <link type="text/css" rel="stylesheet" href="bootstrap-3.2.0-dist/bootstrap-3.2.0-dist/css/bootstrap.css">
        </head>
        <body>
            
            <div class="container" style="padding-top: 1em;">
               <ul class="nav nav-tabs">
                   <li><a href="Index.php" style="text-decoration: none;">Inicio</a></li>
                   <li class="active"><a href="Index.php" style="text-decoration: none;">Usuarios</a></li>
                   <li><a href="Productos.php" style="text-decoration: none;">Registrar Productos</a></li>
                   <li><a href="Proveedores.php" style="text-decoration: none;">Registrar Proveedor</a></li>
                   <li><a href="Solicitudes.php" style="text-decoration: none;">Registrar Solicitud</a></li>

</ul>  
            </div><br><br><br>
           
            <form class="form-horizontal" method="POST" action="#">
                        <div class="form-group">
                            <label for="usuario" class="col-sm-4 control-label">Documento</label>
                            <div class="col-sm-8">
                                <input type="text" name="usuario" id="pNombres" class="form-control" 
                                       placeholder="Ingrese Cedula" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="nombre" class="col-sm-4 control-label">Nombre</label>
                            <div class="col-sm-8">
                                <input type="text" name="nombre" id="pApellidos" class="form-control" 
                                       placeholder="Ingrese el nombre" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="apellido" class="col-sm-4 control-label">Apellido</label>
                            <div class="col-sm-8">
                                <input type="text" name="apellido" id="pCorreo" class="form-control" 
                                       placeholder="Ingrese su Apellido" required>
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="clave" class="col-sm-4 control-label">Contraseña</label>
                            <div class="col-sm-8">
                                <input type="text" name="clave" id="pNombres" class="form-control" 
                                       placeholder="Ingrese Contraseña" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="correo" class="col-sm-4 control-label">Correo</label>
                            <div class="col-sm-8">
                                <input type="text" name="correo" id="pApellidos" class="form-control" 
                                       placeholder="Correo" required>
                            </div>
                        </div>                   
                        <div class="form-group">
                            <div class="col-sm-offset-4 col-sm-10">
                                <input type="submit" name="Registrar" class="btn btn-success" 
                                       value="Registrar">
                            </div>
                        </div>
                    </form>
                
    </body>

    </html>
<?php
 }
 ?>

