<!--
    action="archivo.php" method="POST"
    todo esto en etiqueta de form o general que envuelva el codigo para transmitir

        //echo '$instrucction_SQL1:        '.(boolval($instrucction_SQL1) ? 'true' : 'false')."\n";
        //echo 'mysqli_query($connection,$instrucction_SQL1):        '.(boolval(mysqli_query($connection,$instrucction_SQL1)) ? 'true' : 'false')."\n";
        //echo '$instrucction_SQL1:        '.(boolval($instrucction_SQL1) ? 'true' : 'false')."\n";
        //echo '$connection:        '.(boolval($connection) ? 'true' : 'false')."\n";
        //$consulta = "SELECT * FROM tabla where id = '2'"; si quiero que nos muestre solo un registro en especifico de ID
        //mysqli_query(connection, query, resultmode)
    -->
    <?php
//validamos datos del servidor 
//conectamos a la base de datos
include("conexion.php");
$connection = conectar();

//-----------VARIABLES
//variables keys

//$id_formulario = $_POST["id_formulario"];//ERROR

//variables fijas

//$nombre = $_POST["nombre"];    //ERROR
//$apellido = $_POST["apellido"]; //ERROR
//$observaciones = $_POST["observaciones"]; //ERROR
//$n_de_mesa = $_POST["nmesa"]; //ERROR

//AUXILIARES PARA PRUEBAS DE SERVIDOR 
$id_formulario = 1;
$nombre = "teo"; //
$apellido = "denti";//
$observaciones = "ninguna";//
$n_de_mesa = 1;//
$armado1_combos="c1";
$armado2_="c5";
$bebida="c121";

// Variables predefinidas en caso de error
//$armado1_combos=NULL;
//$armado2_=NULL;
//$bebida=NULL;

//variables de menu
$i=1;
$total = 192 +1;
$contador=0;
$adicionales = array();
// detecta checkbox True y determina variable equivalente

while($i<$total)
{
    if(isset($_POST['c'.strval($i)]))
    {
        if(($i>=1 and $i<=4) or ($i>=18 and $i<=29) or ($i>=56 and $i<=63) or ($i>=88 and $i<=94) or ($i>=117 and $i<=120))
        {
            $armado1_combos = $_POST['c'+String($i)];
        }
        if(($i>=5 and $i<=8) or ($i>=30 and $i<=35) or ($i>=95 and $i<=100))
        {
            $armado2_ = $_POST['c'+String($i)];
        }
        if(($i>=121 and $i<=125) or ($i>=162 and $i<=192))
        {
            $bebida = $_POST['c'+String($i)];
        }
        else{
            $contador+=1;
            array_push($adicionales, ('c'.strvar($i))); //Associative Arrays
        }  
    }
    $i+=1;
}
for($x = (intval($contador)+1); $x < 21; $x++)
{
    array_push($adicionales, NULL);
}
//echo var_dump($adicionales); //var_dump => TODO & print_r => LISTA LIMPIA
//verificamos la conexion a la base de datos
if(!$connection)
        {
            echo "No se ha podido conectar con el servidor" . mysql_error();
        }
    else
        {
            echo "<b><h3>Conectado</h3></b>";
        }
        // indicamos el nombre de la base de datos
        $db = "base";                    //<------ nombre de base de datos entre comillas => DONE
        //indicamos seleccionar a la base de datos
        $db = mysqli_select_db($connection,$db);

        if (!$db)
        {
        echo "No se ha podido encontrar la Tabla";
        }
        else{
        echo "<h3>Se encontro la base de datos: </h3>";
        }
        //insertamos datos de registro al mysql xamp, indicando el nombre de la tabla y sus atributos

        // PRIMERO formulario_orden (IMPRIMIR)
        $instrucction_SQL1 = "INSERT INTO formulario_orden( id_formulario , nombre , apellido , observaciones , n_de_mesa ) 
                                VALUES ( '$id_formulario','$nombre','$apellido','$observaciones', '$n_de_mesa')";
        echo $instrucction_SQL1. "<br>";          
        // SEGUNDO pedido_menu (IMPRIMIR)
        $instrucction_SQL2 = "INSERT INTO pedido_menu( id_formulario , armado1_combos , armado2_ , bebida ) 
                                VALUES ( '$id_formulario','$armado1_combos','$armado2_','$bebida')"; 
        echo $instrucction_SQL2. "<br>";   
        // TERCERO tabla_adicionales (IMPRIMIR)
        $instrucction_SQL3 = "INSERT INTO tabla_adicionales( id_formulario , adic1 , adic2 , adic3 , adic4 , adic5 , adic6 , adic7 , adic8 , adic9 , adic10 , adic11 , adic12 , adic13 , adic14 , adic15 , adic16 , adic17 , adic18 , adic19 , adic20)
                                VALUES ( '$id_formulario','$adicionales[0]','$adicionales[1]','$adicionales[2]','$adicionales[3]','$adicionales[4]','$adicionales[5]','$adicionales[6]','$adicionales[7]','$adicionales[8]','$adicionales[9]','$adicionales[10]','$adicionales[11]','$adicionales[12]','$adicionales[13]','$adicionales[14]','$adicionales[15]','$adicionales[16]','$adicionales[17]','$adicionales[18]','$adicionales[19]')"; 
        echo $instrucction_SQL3. "<br>";  

        //envio resultado de tablas y genero las relevantes
        $resultado1 = mysqli_query($connection,$instrucction_SQL1);

        //echo 'mysqli_query($connection,$instrucction_SQL1):        '.(boolval(mysqli_query($connection,$instrucction_SQL1)) ? 'true' : 'false')."\n";
        //echo '<br>';
        //echo '$connection:        '.(boolval($connection) ? 'true' : 'false')."\n";
        //echo '<br>';
        //echo '$instrucction_SQL1:        '.(boolval($instrucction_SQL1) ? 'true' : 'false')."\n";

        $resultado2 = mysqli_query($connection,$instrucction_SQL2); //con nuevos valores, retorna true
        $resultado3 = mysqli_query($connection,$instrucction_SQL3);
    
        //genera consulta a tablas 
        $consulta1 = "SELECT * FROM formulario_orden"; //
        $consulta2 = "SELECT * FROM pedido_menu"; //OK
        $consulta3 = "SELECT * FROM tabla_adicionales"; //
        
formulario_orden(mysqli_query($connection,$consulta1));
pedido_menu(mysqli_query($connection,$consulta2));
tabla_adicionales(mysqli_query($connection,$consulta3),$adicionales);

//cerramos conexion con db
mysqli_close( $connection );

function formulario_orden($result1) { //----------------------formulario_orden
    if(!$result1)
    {
        echo "No se ha podido realzar la consulta";
    }
    echo "<table>";
    echo "<tr>";
    echo "<th><h2> | </th></h2>";
    echo "<th><h2> id_formulario </th></h2>";
    echo "<th><h2> | </th></h2>";
    echo "<th><h2> Nombre </th></h21>";
    echo "<th><h2> | </th></h2>";
    echo "<th><h2> Apellido </th></h2>";
    echo "<th><h2> | </th></h2>";
    echo "<th><h2> Observaciones </th></h2>";
    echo "<th><h2> | </th></h2>";
    echo "<th><h2> Numero de Mesa </th></h2>";
    echo "</tr>";
    //echo 'mysqli_fetch_array($result1):        '.(boolval(mysqli_fetch_array($result1)) ? 'true' : 'false')."\n";
    while($colum1 = mysqli_fetch_array($result1))
        {
            
            echo "<tr>";
            echo "<th><h2> | </th></h2>";
            echo "<td><h3> " . $colum1['id_formulario']. " </th></h3>";
            echo "<th><h2> | </th></h2>";
            echo "<td><h3> " . $colum1['nombre']. " </th></h2>";
            echo "<th><h2> | </th></h2>";
            echo "<td><h3> " . $colum1['apellido']. " </th></h2>";
            echo "<th><h2> | </th></h2>";
            echo "<td><h3> " . $colum1['observaciones']. " </th></h2>";
            echo "<th><h2> | </th></h2>";
            echo "<td><h3> " . $colum1['n_de_mesa']. " </th></h2>";
            echo "</tr>";
        }
        echo "</table>";
    return;
}
function pedido_menu($result2) {  //------------------------------pedido_menu
    if(!$result2)
    {
        echo "No se ha podido realzar la consulta";
    }
    echo "<table>";
    echo "<tr>";
    echo "<th><h2> | </th></h2>";
    echo "<th><h2>id_formulario </th></h2>";
    echo "<th><h2> | </th></h2>";
    echo "<th><h2> Armado 1 / Combo</th></h2>";
    echo "<th><h2> | </th></h2>";
    echo "<th><h2> Armado 2 </th></h2>";
    echo "<th><h2> | </th></h2>";
    echo "<th><h2> Bebida </th></h2>";
    echo "</tr>";

    while($colum2 = mysqli_fetch_array($result2))
        {
            echo "<tr>";
            echo "<th><h2> | </th></h2>";
            echo "<td><h3> " . $colum2['id_formulario']. " </th></h3>";
            echo "<th><h2> | </th></h2>";
            echo "<td><h3> " . $colum2['armado1_combos']. " </th></h3>";
            echo "<th><h2> | </th></h2>";
            echo "<td><h3> " . $colum2['armado2_']. " </th></h3>";
            echo "<th><h2> | </th></h2>";
            echo "<td><h3> " . $colum2['bebida']. " </th></h3>";
            echo "</tr>";
        }
        echo "</table>";
    return;
}
function tabla_adicionales($result3,$adicionales) {  //---------tabla_adicionales
    if(!$result3)
    {
        echo "No se ha podido realzar la consulta";
    }
    echo "<table>";
    echo "<tr>";
    echo "<th><h2> | </th></h2>";
    echo "<th><h2> id_formulario </th></h1>";
    echo "<th><h2> | </th></h2>";
    echo "<th><h2> adic1 </th></h2>";
    echo "<th><h2> | </th></h2>";
    echo "<th><h2> adic2 </th></h2>";
    echo "<th><h2> | </th></h2>";
    echo "<th><h2> adic3 </th></h2>";
    echo "<th><h2> | </th></h2>";
    echo "<th><h2> adic4 </th></h2>";
    echo "<th><h2> | </th></h2>";
    echo "<th><h2> adic5 </th></h2>";
    echo "<th><h2> | </th></h2>";
    //echo "<th><h2>adic6</th></h2>";
    //echo "<th><h2>adic7</th></h2>";
    //echo "<th><h2>adic8</th></h2>";
    //echo "<th><h2>adic9</th></h2>";
    //echo "<th><h2>adic10</th></h2>";
    //echo "<th><h2>adic11</th></h2>";
    //echo "<th><h2>adic12</th></h2>";
    //echo "<th><h2>adic13</th></h2>";
    //echo "<th><h2>adic14</th></h2>";
    //echo "<th><h2>adic15</th></h2>";
    //echo "<th><h2>adic16</th></h2>";
    //echo "<th><h2>adic17</th></h2>";
    //echo "<th><h2>adic18</th></h2>";
    //echo "<th><h2>adic19</th></h2>";
    //echo "<th><h2>adic20</th></h2>";
    echo "</tr>";

    while($colum3 = mysqli_fetch_array($result3))
        {
            echo "<tr>";
            echo "<th><h2> | </th></h2>";
            echo "<td><h3> " . $colum3['id_formulario']. " </th></h2>";
            echo "<th><h2> | </th></h2>";
            echo "<td><h3> " . $colum2[ $adicionales[adic1] ]. " </th></h3>";
            echo "<th><h2> | </th></h2>";
            echo "<td><h3> " . $colum2[ $adicionales[adic2] ]. " </th></h3>";
            echo "<th><h2> | </th></h2>";
            echo "<td><h3> " . $colum2[ $adicionales[adic3] ]. " </th></h3>";
            echo "<th><h2> | </th></h2>";
            echo "<td><h3> " . $colum2[ $adicionales[adic4] ]. " </th></h3>";
            echo "<th><h2> | </th></h2>";
            echo "<td><h3> " . $colum2[ $adicionales[adic5] ]. " </th></h3>";
            echo "<th><h2> | </th></h2>";
            //echo "<td><h3>" . $colum2[ $adicionales[adic6] ]. "</th></h3>";
            //echo "<td><h3>" . $colum2[ $adicionales[adic7] ]. "</th></h3>";
            //echo "<td><h3>" . $colum2[ $adicionales[adic8] ]. "</th></h3>";
            //echo "<td><h3>" . $colum2[ $adicionales[adic9] ]. "</th></h3>";
            //echo "<td><h3>" . $colum2[ $adicionales[adic10] ]. "</th></h3>";
            //echo "<td><h3>" . $colum2[ $adicionales[adic11] ]. "</th></h3>";
            //echo "<td><h3>" . $colum2[ $adicionales[adic12] ]. "</th></h3>";
            //echo "<td><h3>" . $colum2[ $adicionales[adic13] ]. "</th></h3>";
            //echo "<td><h3>" . $colum2[ $adicionales[adic14] ]. "</th></h3>";
            //echo "<td><h3>" . $colum2[ $adicionales[adic15] ]. "</th></h3>";
            //echo "<td><h3>" . $colum2[ $adicionales[adic16] ]. "</th></h3>";
            //echo "<td><h3>" . $colum2[ $adicionales[adic17] ]. "</th></h3>";
            //echo "<td><h3>" . $colum2[ $adicionales[adic18] ]. "</th></h3>";
            //echo "<td><h3>" . $colum2[ $adicionales[adic19] ]. "</th></h3>";
            //echo "<td><h3>" . $colum2[ $adicionales[adic20] ]. "</th></h3>";
            echo "</tr>";
        }
        echo "</table>";
    return;
}

?>