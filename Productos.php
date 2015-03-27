<?php
require 'DAO/ProductosDAO.php';
require 'DTO/ProductosDTO.php';
if(isset($_POST['Registrar']))
   
{  
        $prov = new ProductosDAO();
        $dto =new ProductosDTO();
        
        $dto->setIdProducto($_POST['Producto']);
        $dto->setNombre($_POST['Nombre']);
        $dto->setCantidad($_POST['Cantidad']); 
        $dto->setIdCategoria($_POST['categoria']);
        $dto->setIdBodega($_POST['bodega']);
        $dto->setIdProveedor($_POST['proveedor']); 
        
        $prov->crearProductos($dto);
    
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
                    <li  class="active"><a href="" style="text-decoration: none;">Registro Productos</a></li>
                    <li><a href="Solicitudes.php" style="text-decoration: none;">Registrar Solicitud</a></li>

</ul>  
            </div><br><br><br>
           
            <form class="form-horizontal" method="POST" action="Proveedores.php">
                        <div class="form-group">
                            <label for="Producto" class="col-sm-4 control-label">Id Productos</label>
                            <div class="col-sm-8">
                                <input type="text" name="Producto" id="pNombres" class="form-control" 
                                       placeholder="Ingrese Productos" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="nombre" class="col-sm-4 control-label">Nombre</label>
                            <div class="col-sm-8">
                                <input type="text" name="Nombre" id="pApellidos" class="form-control" 
                                       placeholder="Ingrese el nombre" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="Cantidad" class="col-sm-4 control-label">Cantidad</label>
                            <div class="col-sm-8">
                                <input type="text" name="Cantidad" id="pCorreo" class="form-control" 
                                       placeholder="Ingrese la cantidad" required>
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="categoria" class="col-sm-4 control-label">Id Categoria</label>
                            <div class="col-sm-8">
                                <input type="text" name="categoria" id="pNombres" class="form-control" 
                                       placeholder="Ingrese categoria" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="bodega" class="col-sm-4 control-label">Id Bodega</label>
                            <div class="col-sm-8">
                                <input type="text" name="bodega" id="pApellidos" class="form-control" 
                                       placeholder="Ingrese Bodega" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="proveedor" class="col-sm-4 control-label">Id Proveedor</label>
                            <div class="col-sm-8">
                                <input type="text" name="proveedor" id="pCorreo" class="form-control" 
                                       placeholder="Ingrese proveedor" required>
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
