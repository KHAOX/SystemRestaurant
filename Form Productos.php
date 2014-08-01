<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Registro Usuarios</title>
<script type="text/javascript" src="js/jquery-1.6.js" ></script>
<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="css/Style.css" type="text/css" rel="stylesheet">

<script type="text/javascript" >

function guardar(){ 
          
				var mensaje="";	
						
					
				if (document.getElementById("img").value=="") mensaje+="  - Debe seleccionar una imagen\n";
				
				if (document.getElementById("nom").value=="") mensaje+="  - No ha ingresado el nombre del producto\n";
				
				if (document.getElementById("precio").value=="") mensaje+="  - Debe establecer el precio\n";
				
				if (document.getElementById("rest").value=="") mensaje+="  - Seleccione el restaurante al que pertenece este producto\n";
				
					
	            if (mensaje!="") {
					alert("ERROR, Datos faltantes \n\n"+mensaje);
				
				} else {
					
						var fic = document.getElementById("img").value;
						fic = fic.split('\\');
  						var File='Productos/'+(fic[fic.length-1]);	
					    
						var datos = "IMG=" + File +
						"&NOM=" + document.getElementById("nom").value+
						"&PRC=" + document.getElementById("precio").value+
						"&RET=" + document.getElementById("rest").value						
									       
                        $.ajax({url: "rt_Productos.php",type: "POST",data:datos,success:function(datos){$('#main').html(datos)}})					
                    }
        
		}
		
</script>
</head>

<body id="main">

<center>

<br/>
<h2 style="color:white">Registro de Productos</h2>

<table class="badge badge-inverse" cellpadding="5px">
  <tr>
    <td>Img</td>
    <td><input id="img" type="file" /></td>
  </tr>
  <tr>
    <td>Nombre</td>
    <td><input id="nom" type="text" /></td>
  </tr>
  <tr>
    <td>Precio</td>
    <td><input id="precio" type="text" /></td>
  </tr>
  <tr>
    <td>Restaurante</td>
    <td>
    <select id="rest">
    <option>Mc Donals</option>
    <option>El Corral</option>
    </select>    
    </td>
  </tr>
  <tr>
    <td colspan="2">
    <input type="button" onclick="guardar()"  value="Registrar"/>
    </td>    
  </tr>
 

</table>


</center>
</body>
</html>