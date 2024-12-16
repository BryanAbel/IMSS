<?php
// Incluir el controlador que obtiene los datos de los médicos
require __DIR__ . "/../../controladores/MedicoController.php";
?>

<h1>MÉDICOS REGISTRADOS</h1>
<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Segundo Nombre</th>
            <th>Apellido Paterno</th>
            <th>Apellido Materno</th>
            <th>Fecha de Nacimiento</th>
            <th>Años de Servicio</th>
            <th>Teléfono</th>
            <th>Opciones</th>
        </tr>
    </thead>
    <tbody>
        <?php if (!empty($medicos)): ?>
            <?php foreach ($medicos as $medico): ?>
                <tr>
                    <td><?php echo $medico['ID']; ?></td>
                    <td><?php echo $medico['vNombre']; ?></td>
                    <td><?php echo $medico['vSegundoNombre']; ?></td>
                    <td><?php echo $medico['vApellidoP']; ?></td>
                    <td><?php echo $medico['vApellidoM']; ?></td>
                    <td><?php echo $medico['dFechaNacimiento']; ?></td>
                    <td><?php echo $medico['iAñosServicio']; ?></td>
                    <td><?php echo $medico['vTelParticular']; ?></td>
                    <td>
                        <a href="#" class="btn btn-warning btn-sm" onclick="ModificarMedicos(<?php echo $medico['ID']; ?>);">Editar</a>
                        <a href="#" class="btn btn-danger btn-sm" onclick="EliminarMedico(<?php echo $medico['ID']; ?>);">Eliminar</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr>
                <td colspan="9">No se encontraron médicos registrados.</td>
            </tr>
        <?php endif; ?>
    </tbody>
</table>
