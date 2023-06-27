<?php
	header("Content-Type: application/xls");    
	header("Content-Disposition: attachment; filename=documento_exportado_" . date('Y:m:d:m:s').".xls");
	header("Pragma: no-cache"); 
	header("Expires: 0");

	require_once 'conn.php';
	
	$output = "";
	
	if(ISSET($_POST['export'])){
		$output .="
			<table>
				<thead>
					<tr>
						<th>Id</th>
						<th>Nombre</th>
						<th>Apellido</th>
						<th>DNI</th>
                        <th>Edad</th>
						<th>Departamento</th>
						<th>Municipio</th>
						<th>Direccion</th>
                        <th>Telefono</th>
						<th>Tipo de Sangre</th>
						<th>Contacto de Emergencia</th>
						<th>Telefono de Contacto</th>
                        <th>Fecha Registro</th>
					</tr>
				<tbody>
		";
		
		$query = mysqli_query($conn, "SELECT * FROM `formulario`") or die(mysqli_errno());
		while($fetch = mysqli_fetch_array($query)){
			
		$output .= "
					<tr>
						<td>".$fetch['id_formulario']."</td>
						<td>".$fetch['nombre']."</td>
						<td>".$fetch['apellido']."</td>
						<td>".$fetch['dni']."</td>
                        <td>".$fetch['edad']."</td>
						<td>".$fetch['departamento']."</td>
						<td>".$fetch['municipio']."</td>
						<td>".$fetch['direccion']."</td>
                        <td>".$fetch['telefono']."</td>
						<td>".$fetch['tipo_sangre']."</td>
						<td>".$fetch['contacto_emergencia']."</td>
						<td>".$fetch['telefono_emergencia']."</td>
                        <td>".$fetch['fecha_actual']."</td>

					</tr>
		";
		}
		
		$output .="
				</tbody>
				
			</table>
		";
		
		echo $output;
	}
	
?>