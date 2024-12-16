<?php
require __DIR__ . "/../Coneccion.php";

// Verifica si se recibió el ID por POST
if (isset($_POST["idPaciente"]) && !empty($_POST["idPaciente"])) {
    $id = $_POST["idPaciente"];
    try {
        // Consulta para eliminar la especialidad
        $sql = "DELETE FROM nom_pa WHERE iId = :id";
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
