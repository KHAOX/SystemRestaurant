<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="text/javascript" src="js/jquery-1.6.js" ></script>
<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="css/Style.css" type="text/css" rel="stylesheet">

<title>System Restaurant</title>
<script>
var user="";

function ingresar(){ 

				
          
				var mensaje="";	
						
				if (document.getElementById("usuario").value=="") mensaje+="  - No ha ingresado Su Usuario\n";
				
				if (document.getElementById("clave").value=="") mensaje+="  - No ha ingresado la contraseña\n";
										
	            if (mensaje!="") {
					alert(" Los siquientes campos son necesarios \n\n"+mensaje);
				
				} else {
					    
						var datos = "USER=" + document.getElementById("usuario").value+
						"&PSS=" + document.getElementById("clave").value
												       
                        $.ajax({url: "acceso.php",type: "POST",data:datos,success:function(datos){$('#main').html(datos)}})					
               }
        
}

function IniciarSesion(cliente){
	user=""+cliente;
	document.getElementById('user').innerHTML=""+cliente;
	document.getElementById('sesion').style.display="none";	
	document.getElementById('user_activo').style.display="inline";
}

function CerrarSesion(){
	document.getElementById('sesion').style.display="inline";
	document.getElementById('user_activo').style.display="none";
    document.getElementById("usuario").value="";
	document.getElementById("clave").value="";	
	user=" ";	
}

function comprar(){
if(user==" "){
alert("Los Sentimos, Debes Iniciar Sesion para usar nuestros servicios");	
}else{
alert("Moludo en proceso");	
}
}
</script>
</head>

<body onLoad="CerrarSesion()">
<center>
<div class="badge badge-inverse" style="width:100%;">

<div id="sesion">
<table width="90%" border="0" class="badge badge-inverse">
  <tr align="right">
    <td><input id="usuario" type="text" style="height:30px;">
    <input id="clave" type="password" style="height:30px;">
    <input name="ingresar" type="submit" value="Ingresar" class="btn btn-danger dropdown-toggle" onClick="ingresar()">
    </td>
    
  	</tr>
   	<tr align="right">
    <td>
    <a onClick="location='It_Cliente.php'" style="cursor:pointer">Registrarme</a>
    </td>
  </tr>
</table>
</div>

<div id="user_activo">
<table width="90%" border="0" class="badge badge-inverse">
  <tr align="right">
    <td>
    <div id="user"></div>    
    <input value="Cerrar Sesion" class="btn btn-danger dropdown-toggle" onClick="CerrarSesion()">
    </td>
    
  	</tr>
 </table>
</div>



<center>
    <table border="0"  class="badge badge-inverse">
  <tr>
    <td>
    <img src="Imagenes/System Restaurant.png" width="375" height="308"> 
    </td>
    <td>
    <h1>Bienvenido a System Restaurant</h1><br/>
    <h4>Escoge Tu Restaurante Favorito y disfruta de los menus que System Restaurant </h4>
	<h4>te ofrece.</h4>
    </td>
  </tr>
</table>

    
	
    
</center>
</div>
</center>
<iframe id="contenido" width="100%" height="100%" frameborder="0" scrolling="si"  src="Inicio.php"></iframe>

<div id="main"></div>
</body>
</html>