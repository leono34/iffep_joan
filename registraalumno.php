<html>
 <head>
 <meta charset="utf-8">
 <title>Registro Alumno</title>
<script src="sweetalert2.min.js"></script>
<link rel="stylesheet" type="text/css" href="sweetalert2.css"/>
 </head>
 <body>
 
 <?php
require('conexion.php');
$cod = $_POST["txtcodigo"];
$nom = $_POST["txtnombre"];
$email = $_POST["txtemail"];
$cel = $_POST["txtcelular"];
$contra = $_POST["txtcontraseña"];
$sql = "Insert Into Alumno(IdAlumno, Nombre, Email, celular, contraseña) values 
('$cod','$nom','$email','$cel','$contra')";
$verifica_codigo = mysqli_query($conexion, "select * from alumno where IdAlumno = '$cod'");
if (mysqli_num_rows($verifica_codigo)>0) {
echo '<script>
 alert("El código insertado ya existe");
 window.history.go(-1);
 </script>';
 exit;
}
$verifica_email = mysqli_query($conexion, "select * from alumno where email= '$email'");
if (mysqli_num_rows($verifica_email)>0) {
echo '<script>
alert("El correo insertado ya existe");
window.history.go(-1);
</script>';
exit;
}
if (mysqli_query($conexion,$sql)){
    header("location:listadoalumnos.php");
}
else{
echo 'Error: '.mysqli_error($conexion);
}
mysqli_close($conexion);
 ?>
 </body>
</html>

