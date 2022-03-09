<?php
require('conexion.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous"> 
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css"> 
    <link rel="stylesheet" href="css/main.css">  
    <script src="funciones.js" language="Javascript"></script> 
</head>
<body>
<div class="container form_editar" id="form_editar">
                    <div class="nuevo">
                        <?php
                        $Id = $_GET['cod'];
                        $sql3 = "select * from alumno where IdAlumno='".$Id."'";
                        $result = $conexion->query($sql3);
                        while ($row = $result->fetch_assoc())
                        {
                        ?>
                        <form>
                                <div class="form-row">
                                    <input type="hidden" name="txtcodigo" value="<?php echo $row['IdAlumno']?>">
                                    <div class="form-group col-md-6">
                                    <label>Nombre</label>
                                    <input type="text" class="form-control" name="txtnombre" value="<?php echo $row['Nombre']?>">
                                    </div>
                                    <div class="form-group col-md-6">
                                    <label >Celular</label>
                                    <input type="number" class="form-control" name="txtcelular" value="<?php echo $row['celular']?>" oninput="if( this.value.length > 9 )  this.value = this.value.slice(0,9)">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                    <label >Email</label>
                                    <input type="text" class="form-control" name="txtemail" value="<?php echo $row['Email']?>">
                                    </div>
                                    <div class="form-group col-md-6">
                                    <label >Contraseña</label>
                                    <input type="text" class="form-control" name="txtcontraseña" value="<?php echo $row['contraseña']?>">
                                    </div>
                                </div>
                                <div class="form-row">
                                <div class="form-group col-md-6">
                                <button type='submit' class='btn btn-success'><i class="bi bi-send-plus-fill"> </i> Enviar</a></button>
                                    </div>
                                <div class="form-group col-md-6">
                                <button type='reset' class='btn btn-warning'><i class='bi bi-pencil-fill'> </i> Editar</a></button>
                                </div>
                            </div> 
                            </form> 
                            <?php } ?>
                            </div>
                            <?php
                            $IdAl=isset($_GET['txtcodigo'])?$_GET['txtcodigo']:null;
                            $NomEdit=isset($_GET['txtnombre'])?$_GET['txtnombre']:null;
                            $EmailEdit=isset($_GET['txtemail'])?$_GET['txtemail']:null;
                            $CelEdit=isset($_GET['txtcelular'])?$_GET['txtcelular']:null;
                            $ContraEdit=isset($_GET['txtcontraseña'])?$_GET['txtcontraseña']:null;
                            if($NomEdit != null || $EmailEdit != null || $CelEdit != null || $ContraEdit != null){
                            {
                            $sql2="Update alumno set Nombre='".$NomEdit."', 
                            Email='".$EmailEdit."', celular='".$CelEdit."', contraseña='".$ContraEdit."' where IdAlumno='".$IdAl."'";
                            mysqli_query($conexion,$sql2);
                            header("location:listadoalumnos.php");
                            }}
                            ?>                
                    </div>       
            </div>
</body>
</html>