<?php
// Verificar si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener las credenciales del formulario
    $correo = $_POST["correoelectronico"];
    $contrasena = $_POST["contrasena"];
    
    // Realizar la validación con la base de datos
    // Aquí deberías ejecutar una consulta SQL para verificar las credenciales en la base de datos
    
    // Aquí un ejemplo básico de cómo podrías hacerlo, esto debe ser modificado para adaptarse a tu base de datos
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

    // Consulta SQL para verificar las credenciales
    $sql = "SELECT * FROM contactos WHERE correoelectronico = '$correo' AND contrasena = '$contrasena'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Las credenciales son válidas, redirigir al usuario a la página de inicio
        header("Location: index.html");
        exit;
    } else {
        // Las credenciales son inválidas, redirigir de nuevo al formulario de inicio de sesión con un mensaje de error
        header("Location: inicioSesion.html?error=1");
        exit;
    }

    $conn->close();
} else {
    // Si el formulario no se ha enviado correctamente, redirigir al usuario a la página de inicio de sesión
    header("Location: inicioSesion.html");
    exit;
}
?>
