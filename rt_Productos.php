<?php
@session_start ();
require_once 'Conexion/conexion.php';

		$IMG=$_POST['IMG'];
		$NOM=$_POST['NOM'];
		$PRC=$_POST['PRC'];
		$RET=$_POST['RET'];
		



 		$sql="SELECT * FROM productos WHERE nombre='$NOM'";
		mysql_set_charset('utf8');
     	$query=mysql_query($sql, $conectar);


		if($num_rows = mysql_num_rows($query))
		{
        echo '<script language="javascript">alert("ERROR. ya existe un producto registrado con ese nombre");</script>';	
		include 'Form Productos.php';	
        }else{
			
		$SQL="SELECT MAX(id) FROM productos";
		$consulta = mysql_query($SQL);  
		if($row=mysql_fetch_array($consulta, MYSQL_NUM))
		{
			 $codigo=$row[0]+1;				 		 
		}		
 				
		  		        
  		$sql = "INSERT INTO productos (id,nombre,precio,img,restaurante) VALUES 
		('$codigo','$NOM','$PRC','$IMG','$RET')";
   
		mysql_set_charset('utf8');
	
    	$res = mysql_query($sql, $conectar);
		if($res){
		echo '<script language="javascript">alert("Registro Guardado");
		</script>';	
		include 'Form Productos.php';	
    	}else{
		echo '<script language="javascript">alert("ERROR. Fallo en el procedimiento - consulte con su provedor de este sitio");</script>';
		include 'Form Productos.php';		
	}
	}
	
?> 












