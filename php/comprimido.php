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
//pasar a booleano los valores de checkbox
$i=1
$total = 192+1
$contador=0
$adicionales = array()
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

//hacemos llamado al imput de formulario
$nombre = $_POST["nombre"];    
$apellido = $_POST["usuario"];
$observaciones = $_POST["observaciones"];
$nmesa = $_POST["nmesa"];
$id_comida = $_POST["idcomida"];
$id_formulario = $_POST["id_formulario"];

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
        $instrucction_SQL = "INSERT INTO tabla(id_formulario , Nombre, Apellido , Observaciones , n° de mesa , id_comidaa , pedido) 
                                VALUES ( '$id_formulario','$nombre','$apellido','$observaciones', '$nmesa','id_comida', )"; //sacar pedido
        
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
