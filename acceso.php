<?php
@session_start();
include("Conexion/conexion.php");

                   
                    $sql = "SELECT * FROM clientes WHERE Usuario = '".$_POST['USER']."' AND Clave = '".$_POST['PSS']."'";
					//$sql = "SELECT * FROM tbl_usuarios_web WHERE flb_usuario = '".$_POST["usuario"]."'";
                 
				    $consulta = mysql_query($sql,$conectar) or die (mysql_error());
                    $row = mysql_fetch_array($consulta);
					echo mysql_error();
                                              
                    if(mysql_num_rows($consulta) > 0){									
					
					$_SESSION['cliente']=$row['Nombre']." ".$row['Apellido'];					
                    echo "<SCRIPT>var cliente='".$_SESSION['cliente']."'; IniciarSesion(cliente);</SCRIPT>";
					$mensaje="Bienvenido a System Restautant Sr(a) ".$_SESSION['cliente'];		
					echo "<SCRIPT>alert('$mensaje');</SCRIPT>";	
					}else{
                    echo '<script language="javascript">alert("ERROR. Usuario o Contraseña Invalida");                   
                    </script>';                                    
					}
                 
?>