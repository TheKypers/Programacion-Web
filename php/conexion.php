<?php
function conectar(){
    $user = "root";
    $pass ="";
    $server = "localhost";
    $db = "base";

    $conexion = new mysqli($server,$user,$pass,$db);

    if($conexion->connect_errno){
        die("La conexion con la base de datos ha fallado". $conexion->connect_errno);
    }
    else { echo " - Estoy conectado? ";}
    return $conexion;
}
?>