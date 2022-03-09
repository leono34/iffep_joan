<?php
$host='localhost';
$user='root';
$pass='';
$bd='bdiffep';

$conexion = mysqli_connect($host,$user,$pass,$bd);
if ($conexion->connect_errno){
    echo "error, no se pudo conectar a la base de datos";
}



?>