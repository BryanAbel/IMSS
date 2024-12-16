<?php
require __DIR__ . "/../Coneccion.php";

// Verifica si se recibió el ID por POST
if (isset($_POST["idEspecialidad"]) && !empty($_POST["idEspecialidad"])) {
    $id = $_POST["idEspecialidad"];
    try {
        // Consulta para eliminar la especialidad
        $sql = "DELETE FROM especialidades WHERE iId = :id";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':id', $id);

        // Ejecutar la consulta
        if ($stmt->execute()) {
            echo "Eliminación exitosa";
        } else {
            echo "Error en la ejecución de la consulta";
        }
    } catch (PDOException $e) {
        // Manejo de errores
        echo "Error: " . $e->getMessage();
    }
} else {
    echo "No se recibió un ID válido";
}
?>
