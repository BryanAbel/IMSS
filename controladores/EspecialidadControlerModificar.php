<?php
    $id = $_POST["idRegistro"];
    $nombre = $_POST["iNombre"];
    $descripcion = $_POST["iDescripcion"];

    echo "Llegué a ControllerModificar"; // Confirmación inicial

    // Validaciones de los datos
    if (empty($id) || empty($nombre) || empty($descripcion)) {
        echo "Datos incompletos. Verifica el formulario.";
        exit;
    }

    // Incluir el modelo
    require __DIR__ . "/../modelos/Especialidad.php";

    // Actualizar la especialidad
    $resultado = actualizarEspecialidad($id, $nombre, $descripcion);

    // Confirmar éxito o error
    if ($resultado) {
        echo "Actualización exitosa";
    } else {
        echo "Error al actualizar la especialidad";
    }
?>
                                                            