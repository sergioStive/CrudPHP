<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
         <link type="text/css" rel="stylesheet" href="bootstrap-3.2.0-dist/bootstrap-3.2.0-dist/css/bootstrap.css">
    </head>
    <body>
        <div class="container" style="padding-top: 1em;">
               <ul class="nav nav-tabs">
                   <li class="active"><a href="Productos.php" style="text-decoration: none;">Inicio</a></li>
                   <li><a href="Index.php" style="text-decoration: none;">Mis Productos</a></li>

</ul>  
            </div>
        
        <div class="container" style="padding-top: 1em;">
           <table border="1" cellspacing=1 cellpadding=2 style="font-size: 8pt"><tr>
                   <td><font face="verdana"><b>Código</b></font></td>
                   <td><font face="verdana"><b>Cliente</b></font></td>
                   <td><font face="verdana"><b>Importe</b></font></td>
                   <td><font face="verdana"><b>Fecha</b></font></td>
               </tr>

               <?php
               $link = @mysql_connect("localhost", "root", "password")
                       or die("Error al conectar a la base de datos.");
               @mysql_select_db("ajpdsoft", $link)
                       or die("Error al conectar a la base de datos.");

               $query = "SELECT idProducto nombre cantidad idBodega from productos";
               $result = mysql_query($query);
               $numero = 0;
               while ($row = mysql_fetch_array($result)) {
                   echo "<tr><td width=\"25%\"><font face=\"verdana\">" .
                   $row["idProducto"] . "</font></td>";
                   echo "<td width=\"25%\"><font face=\"verdana\">" .
                   $row["nombre"] . "</font></td>";
                   echo "<td width=\"25%\"><font face=\"verdana\">" .
                   $row["cantidad"] . "</font></td>";
                   echo "<td width=\"25%\"><font face=\"verdana\">" .
                   $row["idBodega"] . "</font></td></tr>";
                   $numero++;
               }
               echo "<tr><td colspan=\"15\"><font face=\"verdana\"><b>Número: " . $numero .
               "</b></font></td></tr>";
               mysql_free_result($result);
               mysql_close($link);
               ?>
</table>
        </div>
    </body>
</html>
