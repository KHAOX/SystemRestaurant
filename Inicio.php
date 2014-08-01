<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="css/Style.css" type="text/css" rel="stylesheet">
<title>Menu - Restaurantes</title>
<script>
function listar(res){	
 document.location.href("lt_Productos.php?res='"+res+"'"); 	
}
</script>
</head>

<body>
<center>
<br />
<br />
<table width="80%" border="0" align="center" style="cursor:pointer;">
  <tr>
    <td><img src="Imagenes/BurgerKing.png" width="200" height="200" /></td>
    <td><img src="Imagenes/Buffalo_Grill.png" width="200" height="200" /></td>
    <td><img src="Imagenes/Mcdonalds.png" width="200" height="200" onClick="location='lt_productos.php?RES=Mc Donals'" /></td>
    <td><img src="Imagenes/kfc.png" width="200" height="200" /></td>    
   </tr>
  <tr>
    <td><img src="Imagenes/El_Corral.jpg" width="200" height="200" onClick="location='lt_productos.php?RES=El Corral'"/></td>
    <td><img src="Imagenes/piko rico.jpg" width="200" height="200" /></td>
    <td><img src="Imagenes/presto.jpg" width="200" height="200" /></td>
    <td><img src="Imagenes/TipicasEmpanadas.jpg" width="200" height="200" /></td>
  </tr>
</table>
</center>


</body>
</html>
