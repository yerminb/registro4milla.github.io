<?php


// Conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "SR";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Error en la conexión a la base de datos: " . $conn->connect_error);
}

// Obtención de los datos del formulario
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$dni = $_POST['dni'];
$edad = $_POST['edad'];
$idDepartamento1 = $_POST['idDepartamento1'];
$idMunicipio1 = $_POST['idMunicipio1'];
$direccion = $_POST['direccion'];
$telefono = $_POST['telefono'];
$tipo_sangre = $_POST['tipo_sangre'];
$contacto_emergencia = $_POST['contacto_emergencia'];
$telefono_emergencia = $_POST['telefono_emergencia'];
$fechaActual = date('Y-m-d'); // Obtiene la fecha actual en el formato 'YYYY-MM-DD'


// Inserción de los datos en la base de datos
$sql = "INSERT INTO formulario (nombre, apellido, dni, edad, departamento, municipio, direccion, telefono, tipo_sangre, contacto_emergencia, telefono_emergencia, fecha_actual) VALUES ('$nombre', '$apellido', '$dni','$edad', '$idDepartamento1', '$idMunicipio1', '$direccion', '$telefono', '$tipo_sangre', '$contacto_emergencia', '$telefono_emergencia' , '$fechaActual')";
if ($conn->query($sql) === TRUE) {
    echo "Solicitud Enviada correctamente.";
    
    // Redireccionar a otra página web
   //  header("Location: SR/FormularioRegistro.html");
   //  exit; // Asegurarse de que el script se detenga después de la redirección


} else {
    echo "Error al guardar los datos: " . $conn->error;
}

// Cierre de la conexión a la base de datos
$conn->close();
?>
