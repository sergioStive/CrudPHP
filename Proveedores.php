

<?php
require 'DAO/ProveedorDAO.php';
require 'DTO/ProveedorDTO.php';
if(isset($_POST['registrar']))
   
{  
        $prov = new ProveedorDAO();
        $dto =new ProveedorDTO();
        
        $dto->setIdProveedor($_POST['Proveedor']);
        $dto->setNombre($_POST['Nombre']);
        $dto->setTelefono($_POST['Telefono']);
        $dto->setDireccion($_POST['Direccion']); 
        
        $prov->crearProveedor($dto);
    
}
else if(isset($_POST['listar']))
{

        $prov = new ProveedorDAO();
        $dto =new ProveedorDTO();
        
        $dto->setIdProovedor($_POST['Proveedor']);
        $dto->setNombre($_POST['Nombre']);
        $dto->setTelefono($_POST['Telefono']);
        $dto->setDireccion($_POST['Direccion']); 
        $prov->obtenerProveedores($dto);

    
}

 else  {
?>
<html>
    <head>
       <link type="text/css" rel="stylesheet" href="bootstrap-3.2.0-dist/bootstrap-3.2.0-dist/css/bootstrap.css">
        </head>
         <body><br><br><br>
            <div class="container" style="padding-top: 1em;">
               <ul class="nav nav-tabs">
                   <li><a href="Index.php" style="text-decoration: none;">Inicio</a></li>
                    <li class="active"><a href="#" style="text-decoration: none;">Registro Proveedor</a></li>
                   <li><a href="Productos.php" style="text-decoration: none;">Registrar Productos</a></li>
                   <li><a href="Solicitudes.php" style="text-decoration: none;">Registrar Solicitud</a></li>

</ul>  
            </div><br><br><br>
       
            <form class="form-horizontal" id="Producto" name="producto" action="Productos.php">
             <div class="form-group">
                 <label for="proveedor" class="col-sm-4 control-label"> CodigoProveedor</label>
                  <div class="col-sm-8">
                      <input type="text" name="Proveedor"class="form-control" placeholder="Ingrese Proveedor" required>
                        </div>
                          </div>
                            <div class="form-group">
                              <label for="nombre" class="col-sm-4 control-label">Nombre</label>
                               <div class="col-sm-8">
                                <input type="text" name="Nombre" class="form-control" placeholder="Ingrese Nombre" required>
                        </div>
                        </div>
                 <div class="form-group">
                 <label for="telefono" class="col-sm-4 control-label"> Telefono</label>
                 <div class="col-sm-8">
                 <input type="text" name="Telefono" class="form-control" placeholder="Ingrese Nombre" required>
                        </div>
                        </div>
             <div class="form-group">
            <label for="direccion" class="col-sm-4 control-label"> Direccion</label>
            <div class="col-sm-8">
            <input type="text" name="Direccion" class="form-control" placeholder="Ingrese Nombre" required>
                        </div>
                        </div>
            <div class="form-group">
                            <div class="col-sm-offset-4 col-sm-10">
            <input type="submit" name="registrar" value="Registrar" class="btn btn-success" >
            

   </div>
                        </div>
                    </form>
        </body>

    </html>
<?php
 }
 ?>