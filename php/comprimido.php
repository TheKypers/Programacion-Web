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
$i=0
while($i<193)
{
    if(isset($_POST['c'+$i]))
    {
        
    }
}

//hacemos llamado al imput de formulario
//$nombre = $_POST["nombre"];    
//$usuario = $_POST["usuario"];
//$contraseña = $_POST["contraseña"];

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
        $instrucction_SQL = "INSERT INTO tabla(nombre, usuario,contraseña) 
                                VALUES ('$nombre','$usuario','$contraseña')";
        
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
