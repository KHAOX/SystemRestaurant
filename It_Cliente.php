<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Registro Cliente</title>
<script type="text/javascript" src="js/jquery-1.6.js" ></script>
<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="css/Style.css" type="text/css" rel="stylesheet">
<script type="text/javascript" >

function valida_contenido(){ 
          
				var mensaje="";	
						
					
				if (document.getElementById("txt_nom").value=="") mensaje+="  - No ha ingresado su Nombre\n";
				
				if (document.getElementById("txt_ape").value=="") mensaje+="  - No ha ingresado su Apellido\n";
				
				if (document.getElementById("txt_cel").value=="") mensaje+="  - No ha ingresado sus Celular\n";
				
				if (document.getElementById("txt_cor").value=="") mensaje+="  - No ha ingresado la Correo\n";
				
				if (document.getElementById("txt_usu").value=="") mensaje+="  - No ha ingresado el Usuario \n";
				
				if (document.getElementById("txt_cla").value=="") mensaje+="  - No ha ingresado el Clave \n";
				
						
	            if (mensaje!="") {
					alert("ERROR, inconsistencias encontradas \n\n"+mensaje);
				
				} else {
					    
						var datos = "ID=" + document.getElementById("txt_nom").value+
						"&NOM=" + document.getElementById("txt_ape").value+
						"&APS=" + document.getElementById("txt_cel").value+
						"&DIR=" + document.getElementById("txt_cor").value+
						"&TE1=" + document.getElementById("txt_usu").value+
						"&TE2=" + document.getElementById("txt_cla").value
									       
                        $.ajax({url: "rt_clientes.php",type: "POST",data:datos,success:function(datos){$('#main').html(datos)}})					
                    }
        
		}
		
</script>
</head>

<body id="main">


<center>
<br/>
<h1 style="color:white">System Restaurant</h1>
<h2 style="color:white">Registro de Clientes</h2>

    
   <table class="badge badge-inverse" cellpadding="5px">
  <tr>
    <td>Nombre</td>
    <td><input id="txt_nom" type="text" /></td>
  </tr>
  <tr>
    <td>Apellidos</td>
    <td><input id="txt_ape" type="text" /></td>
  </tr>
  <tr>
    <td>Celular</td>
    <td><input id="txt_cel" type="text" /></td>
  </tr>
  <tr>
    <td>Correo</td>
    <td><input id="txt_cor" type="text" /></td>
  </tr>
  <tr>
    <td>Usuario</td>
    <td><input id="txt_usu" type="text" /></td>
  </tr>
  <tr>
    <td>Clave</td>
    <td><input id="txt_cla" type="password" /></td>
  </tr>
  <tr>
    <td colspan="2"><input id="btn_Registrarse" type="button" value="Guardar"  onclick="valida_contenido()" class="btn btn-primary btn-large"/></td>    
  </tr>
</table> 
    
</center>
</body>
</html>