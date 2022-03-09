<?php
 include 'conexion.php';
 $Id = $_GET['cod'];
 $sql = "Delete from alumno where IdAlumno='".$Id."'";
 mysqli_query($conexion, $sql);
 header('location:listadoalumnos.php');
?>
