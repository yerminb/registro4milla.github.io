<?php 
$conexion=mysqli_connect('localhost','root','','SR');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Reporte de Inscripciones</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1 class="display-1 text-center">REPORTE DE INSCRIPCIONES</h1>
		
        <br>
        <form method="post" action="exportar_excel.php">

		<button type="submit" name="export" class="btn btn-primary">Exportar a Excel</button>

            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">id_formulario</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Apellido</th>
                        <th scope="col">DNI</th>
                        <th scope="col">Edad</th>
                        <th scope="col">Departamento</th>
                        <th scope="col">Municipio</th>
                        <th scope="col">Direccion</th>
                        <th scope="col">Telefono</th>
                        <th scope="col">Tipo de Sangre</th>
                        <th scope="col">Contacto de Emergencia</th>
                        <th scope="col">Telefono de Emergencia</th>
						<th scope="col">Fecha de Ingreso</th>
                    </tr>
                </thead>  
                <tbody>
                    <?php 
                    $sql="SELECT * from formulario";
                    $result=mysqli_query($conexion,$sql);

                    while($mostrar=mysqli_fetch_array($result)){
                    ?>
                    <tr>
                        <td><?php echo $mostrar['id_formulario'] ?></td>
                        <td><?php echo $mostrar['nombre'] ?></td>
                        <td><?php echo $mostrar['apellido'] ?></td>
                        <td><?php echo $mostrar['dni'] ?></td>
                        <td><?php echo $mostrar['edad'] ?></td>
                        <td><?php echo $mostrar['departamento'] ?></td>
                        <td><?php echo $mostrar['municipio'] ?></td>
                        <td><?php echo $mostrar['direccion'] ?></td>
                        <td><?php echo $mostrar['telefono'] ?></td>
                        <td><?php echo $mostrar['tipo_sangre'] ?></td>
                        <td><?php echo $mostrar['contacto_emergencia'] ?></td>
                        <td><?php echo $mostrar['telefono_emergencia'] ?></td>
						<td><?php echo $mostrar['fecha_actual'] ?></td>
                    </tr>
                    <?php 
                    }
                    ?>
                </tbody>
            </table>
          
        </form>
    </div>
</body>
</html>
