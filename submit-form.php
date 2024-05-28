<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tienda_avam";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Obtener datos del formulario
$nombreapellido = $_POST['nombreapellido'];
$correoelectronico = $_POST['correoelectronico'];
$telefono = $_POST['telefono'];
$mensaje = $_POST['mensaje'];
$contacto = $_POST['contacto'];
$horario = $_POST['horario'];
$novedades = isset($_POST['novedades']) ? 1 : 0;
$privacidad = isset($_POST['privacidad']) ? 1 : 0;
$contrasena = $_POST['contrasena']; 

// Insertar datos en la base de datos
$sql = "INSERT INTO contactos (nombreapellido, correoelectronico, telefono, mensaje, contacto, horario, novedades, privacidad, contrasena)
VALUES ('$nombreapellido', '$correoelectronico', '$telefono', '$mensaje', '$contacto', '$horario', '$novedades', '$privacidad', '$contrasena')";


if ($conn->query($sql) === TRUE) {
    // Redirigir al usuario a index.html si la inserción fue exitosa
    echo "<script>window.location.href = 'index.html';</script>";
    exit;
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
