<?php
@session_start ();
require_once 'Conexion/conexion.php';

		$ID=$_POST['ID'];
		$NOM=$_POST['NOM'];
		$APS=$_POST['APS'];
		$DIR=$_POST['DIR'];
		$TE1=$_POST['TE1'];
		$TE2=$_POST['TE2'];



 		$sql="SELECT * FROM clientes WHERE Codigo='$ID'";
		mysql_set_charset('utf8');
     	$query=mysql_query($sql, $conectar);


		if($num_rows = mysql_num_rows($query))
		{
        echo '<script language="javascript">alert("ERROR. ya existe un usuario registrado con ese nombre");</script>';	
		include 'It_Cliente.php';	
        }else{
		  		
        
  		$sql = "INSERT INTO clientes (Nombre,Apellido,Celular,Correo,Usuario,Clave,TipoUsuario) VALUES 
		('$ID','$NOM','$APS','$DIR','$TE1','$TE2','2')";
   
		mysql_set_charset('utf8');
	
    	$res = mysql_query($sql, $conectar);
		if($res){
		echo '<script language="javascript">alert("Su registro ha sido satisfactorio");
		</script>';	
		echo'<script language="javascript"> document.location.href="index.php" </script>';	
    	}else{
		echo '<script language="javascript">alert("ERROR. Fallo en el procedimiento - consulte con su provedor de este sitio");</script>';
		include 'It_Cliente.php';		
	}
	}
	
?> 












