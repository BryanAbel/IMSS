<?php 
    require_once "../../controladores/EspecialidadController.php";
?>
<h1>Listado de Especialidades</h1>
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
                    <td><?php echo $especialidad['id']; ?></td>
                    <td><?php echo $especialidad['vNombre']; ?></td>
                    <td><?php echo $especialidad['vDescripcion']; ?></td>
                    <td>
                        <a href="#" class="btn btn-warning btn-sm" onclick="modificar(<?php echo $especialidad['id']; ?>);">Editar</a>
                        <a href="#" class="btn btn-danger btn-sm" onclick="eliminar(<?php echo $especialidad['id']; ?>);">Eliminar</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr>
                <td colspan="4">No se encontraron especialidades.</td>
            </tr>
        <?php endif; ?>
    </tbody>
</table>
