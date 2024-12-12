<!-- Archivo: listar.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Médicos</title>
    <!-- Enlace a la hoja de estilos de Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-4">
        <h3>Lista de Médicos</h3>
        <table class="table table-bordered">
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
                    <th>Especialidad</th>
                </tr>
            </thead>
            <tbody>
                <?php
                require_once '../modelos/Medico.php';
                $medicos = Medico::obtenerTodos();
                foreach ($medicos as $medico) {
                    ?>
                    <tr>
                        <td><?php echo $medico->iId; ?></td>
                        <td><?php echo $medico->vNombre; ?></td>
                        <td><?php echo $medico->vSegundoNombre; ?></td>
                        <td><?php echo $medico->vApellidoP; ?></td>
                        <td><?php echo $medico->vApellidoM; ?></td>
                        <td><?php echo $medico->dFechaNacimiento; ?></td>
                        <td><?php echo $medico->iAñosServicio; ?></td>
                        <td><?php echo $medico->iTelParticular; ?></td>
                        <td><?php echo $medico->especialidad; ?></td>
                    </tr>
                    <?php
                }
                ?>
            </tbody>
        </table>
    </div>
    <!-- Scripts de Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
