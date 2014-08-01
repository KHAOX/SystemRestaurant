<?php
$sql = "SELECT DISTINCT menu.menNombre, menu.menEnlace FROM
amigos, tipoamigo_menu, menu WHERE
amigos.tamgCodigo = ".$_SESSION["tipousuario"]." AND
tipoamigo_menu.menCodigo = menu.menCodigo AND
tipoamigo_menu.tamgCodigo = amigos.tamgCodigo
ORDER BY menu.menNombre ASC 
";
$consulta = mysql_query($sql,$conectar);
echo mysql_error();

while($fila = mysql_fetch_array($consulta)){
    echo '<a href="'.$fila["menEnlace"].'">'.$fila["menNombre"].'</a>&nbsp;|&nbsp;';
}
echo '<hr/>';
?>
