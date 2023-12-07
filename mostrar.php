<?php
include 'conexion.php';

$sql = "SELECT * FROM usuarios";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo '<table>';
    echo '<tr><th>ID</th><th>Nombre</th><th>Email</th><th>Teléfono</th></tr>';
    while ($row = $result->fetch_assoc()) {
        echo "<tr><td>{$row['id']}</td><td>{$row['nombre']}</td><td>{$row['email']}</td><td>{$row['telefono']}</td></tr>";
    }
    echo '</table>';
} else {
    echo 'No hay registros.';
}

$conn->close();
?>
