<!--
    action="archivo.php" method="POST"
    todo esto en etiqueta de form o general que envuelva el codigo para transmitir
-->
<?php
//validamos datos del servidor 
$user = "root";
$pass = "";
$host = "localhost";

//conectamos a la base de datos
$connection = mysqli_connect($host, $user, $pass);

//-----------VARIABLES
//variables keys
$id_comida = $_POST["id_comida"];
$id_formulario = $_POST["id_formulario"];

//variables fijas
$nombre = $_POST["nombre"];    
$apellido = $_POST["apellido"];
$observaciones = $_POST["observaciones"];
$n_de_mesa = $_POST["nmesa"];

//variables de menu
$i=1
$productos = 192
$total = $productos +1
$contador=0
$adicionales = array()
// detecta checkbox True y determina variable equivalente
while($i<$total)
{
    if(isset($_POST['c'+String($i)]))
    {
        if(($i>=1 and $i<=4) or ($i>=18 and $i<=29) or ($i>=56 and $i<=63) or ($i>=88 and $i<=94) or ($i>=117 and $i<=120))
        {
            $armado1_combos = $_POST['c'+String($i)]
        }
        if(($i>=5 and $i<=8) or ($i>=30 and $i<=35) or ($i>=95 and $i<=100))
        {
            $armado2_ = $_POST['c'+String($i)]
        }
        if(($i>=121 and $i<=125) or ($i>=162 and $i<=192))
        {
            $bebida = $_POST['c'+String($i)]
        }
        else
        {
            $contador+=1
            array_push($adicionales, "adic"+string($contador),('c'+String($i)) //Associative Arrays
        }
    }
    $i+=1
}
for($x = (int($contador)+1); $x < 21; $x++)
{
    array_push($adicionales,"adic"+string($x),NULL)
}

//verificamos la conexion a la base de datos
if(!$connection)
        {
            echo "No se ha podido conectar con el servidor" . mysql_error();
        }
    else
        {
            echo "<b><h3>Hemos conectado al servidor</h3></b>"
        }
        // indicamos el nombre de la base de datos
        $datab = "base"                    //<------ nombre de base de datos entre comillas => DONE
        //indicamos seleccionar a la base de datos
        $db = mysqli_select_db($connection,$datab);

        if (!$db)
        {
        echo "No se ha podido encontrar la Tabla";
        }
        else
        {
        echo "<h3>Tabla seleccionada: </h3>"
        }
        //insertamos datos de registro al mysql xamp, indicando el nombre de la tabla y sus atributos

        // PRIMERO formulario_orden (IMPRIMIR)
        $instrucction_SQL1 = "INSERT INTO formulario_orden( id_formulario , nombre , apellido , observaciones , n_de_mesa ) 
                                VALUES ( '$id_formulario','$nombre','$apellido','$observaciones', '$n_de_mesa', )";

        // SEGUNDO pedido_menu (IMPRIMIR)
        $instrucction_SQL2 = "INSERT INTO pedido_menu( id_formulario , armado1_combos , armado2_ , bebida ) 
                                VALUES ( '$id_formulario','$armado1_combos','$armado2_','$bebida')"; 

        // TERCERO tabla_adicionales (IMPRIMIR)
        $instrucction_SQL3 = "INSERT INTO tabla_adicionales( id_formulario , adic1 , adic2 , adic3 , adic4 , adic5 , adic6 , adic7 , adic8 , adic9 , adic10 , adic11 , adic12 , adic13 , adic14 , adic15 , adic16 , adic17 , adic18 , adic19 , adic20)
                                VALUES ( '$id_formulario','$adicionales[adic1]','$adicionales[adic2]','$adicionales[adic3]','$adicionales[adic4]','$adicionales[adic5]','$adicionales[adic6]','$adicionales[adic7]','$adicionales[adic8]','$adicionales[adic9]','$adicionales[adic10]','$adicionales[adic11]','$adicionales[adic12]','$adicionales[adic13]','$adicionales[adic14]','$adicionales[adic15]','$adicionales[adic16]','$adicionales[adic17]','$adicionales[adic18]','$adicionales[adic19]','$adicionales[adic20]')"; 


        //envio resultado de tablas y genero las relevantes
        $resultado1 = mysqli_query($connection,$instrucction_SQL1);
        $resultado2 = mysqli_query($connection,$instrucction_SQL2);
        $resultado3 = mysqli_query($connection,$instrucction_SQL3);

        //$consulta = "SELECT * FROM tabla where id = '2'"; si quiero que nos muestre solo un registro en especifico de ID
        $consulta1 = "SELECT * FROM formulario_orden";
        $consulta2 = "SELECT * FROM pedido_menu";
        $consulta3 = "SELECT * FROM tabla_adicionales";
        
formulario_orden(mysqli_query($connection,$consulta1));
pedido_menu(mysqli_query($connection,$consulta2));
tabla_adicionales(mysqli_query($connection,$consulta3),$adicionales);

mysql_close( $connection );
function formulario_orden($result1) { //----------------------formulario_orden
    if(!$result1)
    {
        echo "No se ha podido realzar la consulta"
    }
    echo "<table>";
    echo "<tr>";
    echo "<th><h1>id_formulario</th></h1>";
    echo "<th><h1>Nombre</th></h1>";
    echo "<th><h1>Apellido</th></h1>";
    echo "<th><h1>Observaciones</th></h1>";
    echo "<th><h1>Numero de Mesa</th></h1>";
    echo "</tr>";

    while($colum1 = mysql_fetch_array($result1))
        {
            echo "<tr>";
            echo "<td><h2>" . $colum1['id_formulario']. "</th></h2>";
            echo "<td><h2>" . $colum1['nombre']. "</th></h2>";
            echo "<td><h2>" . $colum1['apellido']. "</th></h2>";
            echo "<td><h2>" . $colum1['observaciones']. "</th></h2>";
            echo "<td><h2>" . $colum1['n_de_mesa']. "</th></h2>";
            echo "</tr>";
        }
        echo "</table>";
    return
}
function pedido_menu($result2) {  //------------------------------pedido_menu
    if(!$result2)
    {
        echo "No se ha podido realzar la consulta"
    }
    echo "<table>";
    echo "<tr>";
    echo "<th><h1>id_formulario</th></h1>";
    echo "<th><h1>Armado 1/ Combo</th></h1>";
    echo "<th><h1>Armado 2</th></h1>";
    echo "<th><h1>Bebida</th></h1>";
    echo "</tr>";

    while($colum2 = mysql_fetch_array($result2))
        {
            echo "<tr>";
            echo "<td><h2>" . $colum2['id_formulario']. "</th></h2>";
            echo "<td><h2>" . $colum2['armado1_combos']. "</th></h2>";
            echo "<td><h2>" . $colum2['armado2_']. "</th></h2>";
            echo "<td><h2>" . $colum2['bebida']. "</th></h2>";
            echo "</tr>";
        }
        echo "</table>";
    return
}
function tabla_adicionales($result3,$adicionales) {  //---------tabla_adicionales
    if(!$result3)
    {
        echo "No se ha podido realzar la consulta"
    }
    echo "<table>";
    echo "<tr>";
    echo "<th><h1>id_formulario</th></h1>";
    echo "<th><h1>adic1</th></h1>";
    echo "<th><h1>adic2</th></h1>";
    echo "<th><h1>adic3</th></h1>";
    echo "<th><h1>adic4</th></h1>";
    echo "<th><h1>adic5</th></h1>";
    echo "<th><h1>adic6</th></h1>";
    echo "<th><h1>adic7</th></h1>";
    echo "<th><h1>adic8</th></h1>";
    echo "<th><h1>adic9</th></h1>";
    echo "<th><h1>adic10</th></h1>";
    echo "<th><h1>adic11</th></h1>";
    echo "<th><h1>adic12</th></h1>";
    echo "<th><h1>adic13</th></h1>";
    echo "<th><h1>adic14</th></h1>";
    echo "<th><h1>adic15</th></h1>";
    echo "<th><h1>adic16</th></h1>";
    echo "<th><h1>adic17</th></h1>";
    echo "<th><h1>adic18</th></h1>";
    echo "<th><h1>adic19</th></h1>";
    echo "<th><h1>adic20</th></h1>";
    echo "</tr>";

    while($colum3 = mysql_fetch_array($result3))
        {
            echo "<tr>";
            echo "<td><h2>" . $colum3['id_formulario']. "</th></h2>";
            echo "<td><h2>" . $colum2[ $adicionales[adic1] ]. "</th></h2>";
            echo "<td><h2>" . $colum2[ $adicionales[adic2] ]. "</th></h2>";
            echo "<td><h2>" . $colum2[ $adicionales[adic3] ]. "</th></h2>";
            echo "<td><h2>" . $colum2[ $adicionales[adic4] ]. "</th></h2>";
            echo "<td><h2>" . $colum2[ $adicionales[adic5] ]. "</th></h2>";
            echo "<td><h2>" . $colum2[ $adicionales[adic6] ]. "</th></h2>";
            echo "<td><h2>" . $colum2[ $adicionales[adic7] ]. "</th></h2>";
            echo "<td><h2>" . $colum2[ $adicionales[adic8] ]. "</th></h2>";
            echo "<td><h2>" . $colum2[ $adicionales[adic9] ]. "</th></h2>";
            echo "<td><h2>" . $colum2[ $adicionales[adic10] ]. "</th></h2>";
            echo "<td><h2>" . $colum2[ $adicionales[adic11] ]. "</th></h2>";
            echo "<td><h2>" . $colum2[ $adicionales[adic12] ]. "</th></h2>";
            echo "<td><h2>" . $colum2[ $adicionales[adic13] ]. "</th></h2>";
            echo "<td><h2>" . $colum2[ $adicionales[adic14] ]. "</th></h2>";
            echo "<td><h2>" . $colum2[ $adicionales[adic15] ]. "</th></h2>";
            echo "<td><h2>" . $colum2[ $adicionales[adic16] ]. "</th></h2>";
            echo "<td><h2>" . $colum2[ $adicionales[adic17] ]. "</th></h2>";
            echo "<td><h2>" . $colum2[ $adicionales[adic18] ]. "</th></h2>";
            echo "<td><h2>" . $colum2[ $adicionales[adic19] ]. "</th></h2>";
            echo "<td><h2>" . $colum2[ $adicionales[adic20] ]. "</th></h2>";
            echo "</tr>";
        }
        echo "</table>";
    return
}

?>
