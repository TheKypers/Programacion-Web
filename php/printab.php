<?php 
include "nombre.php";

function imprimir($connection,$consulta1,$consulta2,$consulta3) {
    formulario_orden(mysqli_query($connection,$consulta1));
    pedido_menu(mysqli_query($connection,$consulta2));
    tabla_adicionales(mysqli_query($connection,$consulta3),$adicionales);
}

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
            echo "<td><h3> " .nombres($colum2['armado1_combos'],"N"). " </th></h3>";
            echo "<th><h2> | </th></h2>";
            echo "<td><h3> " .nombres($colum2['armado2_'],"N"). " </th></h3>";
            echo "<th><h2> | </th></h2>";
            echo "<td><h3> " .nombres($colum2['bebida'],"N"). " </th></h3>";
            echo "</tr>";
        }
        echo "</table>";
    return;
}


function tabla_adicionales($result3) {  //---------tabla_adicionales
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
