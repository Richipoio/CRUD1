<?php
// baja.php - Código para eliminar un usuario

include 'conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];

    // Verificar si el usuario existe antes de intentar eliminarlo
    $verificar_sql = "SELECT * FROM usuarios WHERE id = $id";
    $verificar_result = $conn->query($verificar_sql);

    if ($verificar_result->num_rows > 0) {
        // El usuario existe, proceder con la eliminación
        $eliminar_sql = "DELETE FROM usuarios WHERE id = $id";

        if ($conn->query($eliminar_sql) === TRUE) {
            // Redirigir al cliente a la página principal después de la operación
            header('Location: index.php');
            exit();
        } else {
            // Manejar el error si es necesario
            die("Error al eliminar el usuario: " . $conn->error);
        }
    } else {
        // Manejar el caso en el que el usuario no existe
        die("El usuario con ID $id no existe.");
    }
}

$conn->close();
?>
