<?php
require('conexion.php');
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Sistema Académico</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous"> 
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">         
        <link rel="stylesheet" href="css/main.css">  
        <script src="funciones.js" language="Javascript"></script> 
    </head>
    <body>
<h1>Listado de Alumnos Ifeep</h1>
         <div class="container ">
                <table class="table table-bordered">
                    <tr> 
                        <th><button onclick='mostrarRegistro();' type="button" class="btn btn-primary"><i class="bi bi-person-plus-fill"></i>Agregar</button></th>
                    </tr>
                      <tr id="base">
                        <th>Codigo</th>
                        <th>Nombre</th>
                        <th>Email</th>
                        <th>Celular</th>
                        <th>Password</th>
                        <th>Accion</th>
                     </tr> 
                     <tr>
                     <?php
                     $sql ="SELECT *FROM alumno";
                     $result = $conexion->query($sql);
                     if($result->num_rows > 0){
                            while($row = $result->fetch_assoc()){
                                echo "<tr><td>".$row["IdAlumno"]."</td><td>".$row["Nombre"]."</td><td>";
                                echo $row["Email"]."</td><td>";
                                echo $row["celular"]."</td><td>";
                                echo $row["contraseña"]."</td><td>";
                                echo "<button type='button' class='btn btn-success'><a 
                                href=editaralumno.php?cod=".$row["IdAlumno"]."><i class='bi bi-pencil-fill'> </i> Editar</a></button>"; 
                                echo "<button type='button' class='btn btn-danger'> <a 
                                href=eliminaralumno.php?cod=".$row["IdAlumno"]."> <i class='bi bi-trash-fill'> </i> Eliminar</a> </button></td></tr>";
                            }
                     }else{
                            echo "No hay registros";

                        }
                        mysqli_close($conexion);
                        ?>
                     </tr> 
                    
                </table>
            </div>  
            <div class="container form_agregar" id="form_agregar">
                <div class="nuevo">
                    <label class="btn_close" onclick='ocultarRegistro();'><i class="bi bi-x-octagon-fill"></i></label>
                    <form method="post" action="registraalumno.php">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                <label >Codigo</label>
                                <input type="text" class="form-control" name="txtcodigo" placeholder="Digite Codigo">
                                </div>
                                <div class="form-group col-md-6">
                                <label>Nombre</label>
                                <input type="text" class="form-control" name="txtnombre" placeholder="Digite Nombre">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                <label >Celular</label>
                                <input type="number" class="form-control" name="txtcelular"  oninput="if( this.value.length > 9 )  this.value = this.value.slice(0,9)" placeholder="Digite su Celular">
                                </div>
                                <div class="form-group col-md-6">
                                <label >Email</label>
                                <input type="text" class="form-control" name="txtemail" placeholder="Digite su Correo">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                <label >Contraseña</label>
                                <input type="password" class="form-control" name="txtcontraseña" placeholder="Digite su Contraseña">
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
                </div>
            </div>
    </body>
</html>