<?php
session_start();
require_once 'Conexion/conexion.php';
//Iniciar la sesion

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="css/Style.css" type="text/css" rel="stylesheet">
        <title></title>
    </head>
    <body>
        <h3 Style="color:white">Lista de Productos <?php echo $_GET['RES'] ?></h3>
        <?php
            //menu
         //   include("menu.php");
		 	
            echo '<table border="0">';
            echo '</table>';
			$RES= $_GET['RES'];
			
        ?>
        <center>
        
        <table border="0" class="badge badge-inverse" cellpadding="5px">
            <tbody>
            
           <?php
			   
                $sql = "SELECT * FROM productos WHERE restaurante='".$_GET['RES']."' ORDER BY nombre Asc";
                $consulta = mysql_query($sql,$conectar);
                echo mysql_error();
                while($registro = mysql_fetch_array($consulta)){
				?>
           
           
  				<tr>
   				<td><img src="<?php echo $registro["img"] ?>" width="100" height="200"></td>
    			<td><?php echo $registro["nombre"] ?></td>
    			<td><?php echo $registro["precio"] ?></td>
                <td><img src="Imagenes/cesta.png" width="64" height="64" style="cursor:pointer;" onClick="window.parent.comprar()"></td>
  				</tr>

				           
			<?php
                }
            ?>
            
           
            </tbody>
        </table>
        </center>
          <center>
     <img src="Imagenes/Back.png" border="0" onClick="history.back(-1);" style="cursor:pointer; width:100px; height:100px;">
   </center>
    </body>
</html>









