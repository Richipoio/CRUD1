<?php
// modificar.php - Código para modificar un usuario

include 'conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id_modificar = $_POST['id_modificar'];
    $nombre_modificar = $_POST['nombre_modificar'];
    $email_modificar = $_POST['email_modificar'];
    $telefono_modificar = $_POST['telefono_modificar'];

    // Verificar si el usuario existe antes de intentar modificarlo
    $verificar_sql = "SELECT * FROM usuarios WHERE id = $id_modificar";
    $verificar_result = $conn->query($verificar_sql);

    if ($verificar_result->num_rows > 0) {
        // El usuario existe, proceder con la modificación
        $modificar_sql = "UPDATE usuarios SET nombre='$nombre_modificar', email='$email_modificar', telefono='$telefono_modificar' WHERE id = $id_modificar";

        if ($conn->query($modificar_sql) === TRUE) {
            // Redirigir al cliente a la página principal después de la operación
            header('Location: index.php');
            exit();
        } else {
            // Manejar el error si es necesario
            die("Error al modificar el usuario: " . $conn->error);
        }
    } else {
        // Manejar el caso en el que el usuario no existe
        die("El usuario con ID $id_modificar no existe.");
    }
}

$conn->close();
?>
