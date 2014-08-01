<?php

    $servidor = "localhost";
    $usuario = "root";
    $clave = "";
    $bd = "systemrestaurant";
    
    $conectar = mysql_connect($servidor, $usuario, $clave) or die("No se ha establecido la Conexion con el servidor");
    mysql_select_db($bd, $conectar) or die("No se pudo seleccionar la Base de Datos");
    mysql_set_charset('utf8');
    
?>
