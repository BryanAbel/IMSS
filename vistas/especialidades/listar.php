<?php 
require __DIR__ . "/../../controladores/EspecialidadController.php";
?>
<h1>ESPECIALIDADES REGISTRADAS</h1>
<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Descripción</th>
            <th>Opciones</th>
        </tr>
    </thead>
    <tbody>
        <?php if (!empty($especialidades)): ?>
            <?php foreach ($especialidades as $especialidad): ?>
                <tr>
                    <td><?php echo $especialidad['ID']; ?></td>
                    <td><?php echo $especialidad['Nombre']; ?></td>
                    <td><?php echo $especialidad['Descripcion']; ?></td>
                    <td>
                        <a href="#" class="btn btn-warning btn-sm" onclick="modificar(<?php echo $especialidad['ID']; ?>);">Editar</a>
                        <a href="#" class="btn btn-danger btn-sm" onclick="eliminar(<?php echo $especialidad['ID']; ?>);">Eliminar</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr>
                <td colspan="8">No se encontraron especialidades.</td>
            </tr>
        <?php endif; ?>
    </tbody>
</table>
