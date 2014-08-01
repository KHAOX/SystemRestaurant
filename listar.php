<?php
session_start();
include_once("Conexion/conexion.php");
//Iniciar la sesion
if(!isset($_SESSION["Nombre"])){
    $sql = "SELECT * FROM clientes WHERE
            Usuario = '".$_POST["usuario"]."' AND
            Clave = '".$_POST["clave"]."'
           ";
    //echo $sql;
    $consulta = mysql_query($sql,$conectar);
    $fila = mysql_fetch_array($consulta);
    echo mysql_error();
    if(mysql_num_rows($consulta) > 0){
        $_SESSION["Nombre"] = $fila["Nombre"];
        $_SESSION["Apellido"] = $fila["Apellido"];
        $_SESSION["tipousuario"] = $fila["TipoUsuario"];
        echo '<script type="text/javascript">location.href="listar.php";</script>';
    }else{
        echo '<script type="text/javascript">alert("Nombre de Usuario o Clave Invalida"); location.href="index.php";</script>';
    }
}

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <h3>Agenda de Amigos</h3>
        <?php
            //menu
            include("menu.php");
            echo '<table border="0">';
            echo '<tr><td>'.$_SESSION["Nombre"].' '.$_SESSION["Apellido"].'</td>';
            echo '</table>';
        ?>
        <hr/>
        <table border="0">
            <tbody>
            <?php
                $sql = "SELECT * FROM clientes ORDER BY Nombre Asc";
                $consulta = mysql_query($sql,$conectar);
                echo mysql_error();
                while($registro = mysql_fetch_array($consulta)){
                    echo '<tr>';
                        echo '<td>';
                        echo '<a href="amigo.php?codigo='.$registro["amgCodigo"].'">';
                        echo '<img src="fotos/'.$registro["amgImagen"].'" width="40" height="60" alt="'.$registro["amgNombre"].'"/>';
                        echo '</a>';
                        echo '<td>'.$registro["amgNombre"].'</td>';
                        echo '<td>'.$registro["amgApellido"].'</td>';
                        echo '<td>';
                            echo '<a href="amigo.php?codigo='.$registro["amgCodigo"].'">';
                            echo '<img src="imagenes/ver.png" width="32" height="32" alt="ver"/>';
                            echo '</a>';
                        echo '</td>';
                        if($_SESSION["tipousuario"] == 1){
                            echo '<td>';
                                echo '<a href="editaramigo.php?codigo='.$registro["amgCodigo"].'">';
                                echo '<img src="imagenes/editar.png" width="32" height="32" alt="editar"/>';
                                echo '</a>';
                            echo '</td>';
                            echo '<td>';
                                echo '<a href="eliminar.php?codigo='.$registro["amgCodigo"].'">';
                                echo '<img src="imagenes/eliminar.png" width="32" height="32" alt="eliminar"/>';
                                echo '</a>';
                            echo '</td>';
                        }
                    echo '</tr>';
                }
            ?>
            </tbody>
        </table>
    </body>
</html>









