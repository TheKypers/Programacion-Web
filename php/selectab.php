<?php
include "conexion.php" ;
$connection = conectar();
include "printab.php" ;
//include("index.php");

if(!$connection)
        {
            echo "No se ha podido conectar con el servidor" . mysql_error();
        }
    else
        {
            echo "<br>- En efecto";
        }
        // indicamos el nombre de la base de datos
        $db = "base";                    //<------ nombre de base de datos entre comillas => DONE
        //indicamos seleccionar a la base de datos
        $db = mysqli_select_db($connection,$db);

        if (!$db)
        {
        echo "<br> - Y <b>No<b> encontré esta tabla:";
        }
        else{
        echo "<br> - Y encontré esta tabla:";
        }
            
$consulta1 = "SELECT * FROM formulario_orden"; //
$consulta2 = "SELECT * FROM pedido_menu"; //OK
$consulta3 = "SELECT * FROM tabla_adicionales"; //
echo $consulta3;
//envio resultado de tablas y genero las relevantes
//$adicionales
imprimir($connection,$consulta1,$consulta2,$consulta3);

//cerramos conexion con db
mysqli_close( $connection );
?>