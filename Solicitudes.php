<?php
require 'DAO/SolicitudesDAO.php';
require 'DTO/SolicitudesDTO.php';
if(isset($_POST['Registrar']))
   
{  
        $prov = new SolicitudesDAO();
        $dto =new SolicitudesDTO();
        
        $dto->setIdSolicitud($_POST['solicitud']);
        $dto->setNombre($_POST['nombre']);
        $dto->setObservaciones($_POST['obser']); 
        $dto->setFecha($_POST['fecha']);
    
        
        $prov->crearSolicitud($dto);
    
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
        <body><br><br><br>
            <div class="container" style="padding-top: 1em;">
               <ul class="nav nav-tabs">
                   <li><a href="Index.php" style="text-decoration: none;">Inicio</a></li>
                   <li><a href="Proveedores.php" style="text-decoration: none;">Registrar Proveedor</a></li>
                    <li class="active"><a href="" style="text-decoration: none;">Registrar Solicitud</a></li>
                    <li><a href="" style="text-decoration: none;">Registro Productos</a></li>

</ul>  
            </div><br><br><br>
           
            <form class="form-horizontal" method="POST" action="#">
                        <div class="form-group">
                            <label for="solicitud" class="col-sm-4 control-label">Id Solicitud</label>
                            <div class="col-sm-8">
                                <input type="text" name="solicitud" id="pNombres" class="form-control" 
                                       placeholder="Ingrese solicitud" required>
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
                            <label for="obser" class="col-sm-4 control-label">Observaciones</label>
                            <div class="col-sm-8">
                                <input type="text" name="obser" id="pCorreo" class="form-control" 
                                       placeholder="Observaciones" required>
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="fecha" class="col-sm-4 control-label">Fecha</label>
                            <div class="col-sm-8">
                                <input type="date" name="fecha" id="pNombres" class="form-control" 
                                       placeholder="Fecha" required>
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

