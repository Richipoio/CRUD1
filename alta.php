<?php
// alta.php - Código para insertar un nuevo usuario

include 'conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];

    $sql = "INSERT INTO usuarios (nombre, email, telefono) VALUES ('$nombre', '$email', '$telefono')";

    if ($conn->query($sql) === TRUE) {
        // Redirigir al cliente a la página principal después de la operación
        header('Location: index.php');
        exit();
    } else {
        // Manejar el error si es necesario
        die("Error al añadir el registro: " . $conn->error);
    }
}

$conn->close();
?>
