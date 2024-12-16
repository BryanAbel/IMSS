<?php
// Incluir archivo de conexión a la base de datos
require __DIR__ . "/Coneccion.php";

// Consulta para obtener las especialidades
$sql = "SELECT iId, vNombre FROM especialidades";
$resultado = $conexion->query($sql);

// Verificar si hay resultados
if ($resultado->num_rows > 0) {
    // Crear las opciones del select
    echo '<option value="">Seleccione una especialidad</option>';
    while ($row = $resultado->fetch_assoc()) {
        echo '<option value="' . $row['iId'] . '">' . $row['vNombre'] . '</option>';
    }
} else {
    echo '<option value="">No hay especialidades disponibles</option>';
}

// Cerrar la conexión
$conexion->close();
?>
