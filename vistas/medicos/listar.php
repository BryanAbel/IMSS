<?php
require_once '../../modelos/Medico.php';

$medicos = Medico::obtenerTodos(); // Obtener todos los médicos
?>

<!-- Esta sección solo se incluye si no es una solicitud AJAX -->
<?php if (!isset($_SERVER['HTTP_X_REQUESTED_WITH']) || $_SERVER['HTTP_X_REQUESTED_WITH'] !== 'XMLHttpRequest'): ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Médicos</title>
    <link rel="stylesheet" href="/path/to/styles.css">
</head>
<body>
    <h1>Listado de Médicos</h1>
    <div id="contenidoTablaPersonas">
<?php endif; ?>

    <!-- Tabla de médicos -->
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Especialidad</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($medicos as $medico): ?>
                <tr>
                    <td><?= $medico['id'] ?></td>
                    <td><?= $medico['nombre'] ?></td>
                    <td><?= $medico['especialidad'] ?></td>
                    <td>
                        <a href="/medicos/editar/<?= $medico['id'] ?>">Editar</a>
                        <a href="/medicos/eliminar/<?= $medico['id'] ?>" onclick="return confirm('¿Seguro que desea eliminar este médico?');">Eliminar</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

<?php if (!isset($_SERVER['HTTP_X_REQUESTED_WITH']) || $_SERVER['HTTP_X_REQUESTED_WITH'] !== 'XMLHttpRequest'): ?>
    </div>
    <script src="/path/to/funciones.js"></script>
</body>
</html>
<?php endif; ?>
