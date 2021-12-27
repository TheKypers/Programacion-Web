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

//variables keys
$id_comida = $_POST["id_comida"];
$id_formulario = $_POST["id_formulario"];

//variables fijas
$nombre = $_POST["nombre"];    
$apellido = $_POST["apellido"];
$observaciones = $_POST["observaciones"];
$n_de_mesa = $_POST["nmesa"];

//variables adicionales
$adic1 = NULL
$adic2 = NULL
$adic3 = NULL
$adic4 = NULL
$adic5 = NULL
$adic6 = NULL
$adic7 = NULL
$adic8 = NULL
$adic9 = NULL
$adic10 = NULL
$adic11 = NULL
$adic12 = NULL
$adic13 = NULL
$adic14 = NULL
$adic15 = NULL
$adic16 = NULL
$adic17 = NULL
$adic18 = NULL
$adic19 = NULL
$adic20 = NULL

//variables de menu
$i=1
$total = 192+1
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
            array_push('c'+String($i))
        }
    }
    $i+=1
}

//verificamos la conexion a la base de datos
if(!$connection)                                 // <----CHECK 
        {
            echo "No se ha podido conectar con el servidor" . mysql_error();
        }
    else
        {
            echo "<b><h3>Hemos conectado al servidor</h3></b>"
        }
        // indicamos el nombre de la base de datos
        $datab = "formulario"                    //<------ nombre de base de datos entre comillas
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

        // PRINCIPAL formulario_orden
        $instrucction_SQL1 = "INSERT INTO formulario_orden( id_formulario , nombre , apellido , observaciones , n_de_mesa , id_comida ) 
                                VALUES ( '$id_formulario','$nombre','$apellido','$observaciones', '$n_de_mesa','$id_comida', )"; 

        // SECUNDARIA pedido_menu
        $instrucction_SQL2 = "INSERT INTO pedido_menu( id_formulario , armado1_combos , armado2_ , bebida ) 
                                VALUES ( '$id_formulario','$armado1_combos','$armado2_','$bebida')"; 
        // TERCIARIA tabla_adicionales
        $instrucction_SQL2 = "INSERT INTO tabla_adicionales( id_formulario , adic1 , adic2 , adic3 , adic4 , adic5 , adic6 , adic7 , adic8 , adic9 , adic10 , adic11 , adic12 , adic13 , adic14 , adic15 , adic16 , adic17 , adic18 , adic19 , adic20)
                                VALUES ( '$id_formulario','$adic1','$adic2','$adic3','$adic4','$adic5','$adic6','$adic7','$adic8','$adic9','$adic10','$adic11','$adic12','$adic13','$adic14','$adic15','$adic16','$adic17','$adic18','$adic19','$adic20')"; 
        

        //envio resultado de tablas y genero las relevantes
        $resultado = mysqli_query($connection,$instrucction_SQL);

        //$consulta = "SELECT * FROM tabla where id = '2'"; si quiero que nos muestre solo un registro en especifico de ID
        $consulta = "SELECT * FROM tabla";
$result = mysqli_query($connection,$consulta);
if(!$result)
{
    echo "No se ha podido realzar la consulta"
}
echo "<table>";
echo "<tr>";
echo "<th><h1>Id</th></h1>";
echo "<th><h1>Nombre</th></h1>";
echo "<th><h1>Usuario</th></h1>";
echo "<th><h1>Contraseña</th></h1>";
echo "</tr>";

while($colum = mysql_fetch_array($result))
    {
        echo "<tr>";
        echo "<td><h2>" . $colum['id']. "</th></h2>";
        echo "<td><h2>" . $colum['nombre']. "</th></h2>";
        echo "<td><h2>" . $colum['usuario']. "</th></h2>";
        echo "<td><h2>" . $colum['contraseña']. "</th></h2>";
        echo "</tr>";
    }
    echo "</table>";

    mysql_close( $connection );
        
        //echo "Fuera" ;
        echo '<a href="index.html"> Volver Atrás</a>'; //<----PARA VOLVER A LA PAGINA


?>
