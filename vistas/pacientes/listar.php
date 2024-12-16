<?php 
require __DIR__ . "/../../controladores/PacienteController.php";
?>
<h1>pacientes registrados</h1>
<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>segundo nombre</th>
            <th>apellido paterno</th>
            <th>apellido materno</th>
            <th>fecha de nacimiento</th>
            <th>telefono particular</th>
            <th>telefono familiar</th>
            <th>Opciones</th>
        </tr>
    </thead>
    <tbody>
        <?php if (!empty($pacientes)): ?>
            <?php foreach ($pacientes as $pacientes): ?>
                <tr>
                    <td><?php echo $pacientes['ID']; ?></td>
                    <td><?php echo $pacientes['NOMBRE']; ?></td>
                    <td><?php echo $pacientes['SEGUNDONOMBRE'];?></td>
                    <td><?php echo $pacientes['APELLIDOP'];?></td>
                    <td><?php echo $pacientes['APELLIDOSM'];?></td>
                    <td><?php echo $pacientes['FECHANACI'];?></td>
                    <td><?php echo $pacientes['TELPARTI'];?></td>
                    <td><?php echo $pacientes['TELFAMI'];?></td>
                    
                    
                    ?></td>
                    <td>
                        <a href="#" class="btn btn-warning btn-sm" onclick="modificarP(<?php echo $pacientes['ID']; ?>);">Editar</a>
                        <a href="#" class="btn btn-danger btn-sm" onclick="eliminarP(<?php echo $pacientes['ID']; ?>);">Eliminar</a>
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
