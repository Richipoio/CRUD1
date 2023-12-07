<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Ricardo Garcia</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<div class="container">
    <h1>CRUD Ricardo Garcia Carmona</h1>
    
    <section id="userList">
        <h2>Lista de Usuarios</h2>
        <div id="userListContent"></div>
    </section>

    <section id="addUserForm" class="toggleable-form hidden">
        <h2>Añadir Usuario</h2>
        <?php include 'formulario_alta.php'; ?>
    </section>

    <section id="deleteUserForm" class="toggleable-form hidden">
        <h2>Eliminar Usuario</h2>
        <?php include 'formulario_baja.php'; ?>
    </section>

    <section id="updateUserForm" class="toggleable-form hidden">
        <h2>Modificar Usuario</h2>
        <?php include 'formulario_modificar.php'; ?>
    </section>
</div>

<button id="toggleFormsBtn">Mostrar/Ocultar Formularios</button>

<script>
    function toggleForms() {
        var forms = document.querySelectorAll('.toggleable-form');
        forms.forEach(function(form) {
            form.classList.toggle('hidden');
        });
    }

    document.getElementById('toggleFormsBtn').addEventListener('click', toggleForms);

    function updateUserList() {
        // Realizar una solicitud AJAX para obtener la lista actualizada de usuarios
        var xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function() {
            if (xhr.readyState == 4 && xhr.status == 200) {
                // Actualizar solo la sección de la lista de usuarios
                document.getElementById('userListContent').innerHTML = xhr.responseText;
            }
        };
        xhr.open('GET', 'mostrar.php', true);
        xhr.send();
    }

    // Actualizar la lista de usuarios al cargar la página
    window.onload = function() {
        updateUserList();
    };
</script>


</body>
</html>
