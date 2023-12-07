<!-- formulario_modificar.php -->
<form class="toggleable-form hidden" action="modificar.php" method="post">
    <label for="id_modificar">ID del Usuario a Modificar:</label>
    <input type="text" name="id_modificar" required>

    <label for="nombre_modificar">Nuevo Nombre:</label>
    <input type="text" name="nombre_modificar" required>

    <label for="email_modificar">Nuevo Email:</label>
    <input type="email" name="email_modificar" required>

    <label for="telefono_modificar">Nuevo Teléfono:</label>
    <input type="text" name="telefono_modificar" required>

    <button type="submit">Modificar Usuario</button>
</form>
