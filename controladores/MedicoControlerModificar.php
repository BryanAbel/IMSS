<?php
    // Obtener los datos del formulario
    $id = $_POST["idRegistro"];
    $nombre = $_POST["iNombre"];
    $segundoNombre = $_POST["iSegundoNombre"];
    $apellidoP = $_POST["iApellidoPaterno"];
    $apellidoM = $_POST["iApellidoMaterno"];
    $fechaNacimiento = $_POST["iNacimiento"];
    $anosServicio = $_POST["iAnos"];
    $telParticular = $_POST["iTel"];

    echo "Llegué a ControllerModificar"; // Confirmación inicial

    // Validaciones de los datos
    if (empty($id) || empty($nombre) || empty($apellidoP) || empty($apellidoM) || empty($fechaNacimiento) || empty($anosServicio) || empty($telParticular)) {
        echo "Datos incompletos. Verifica el formulario.";
        exit;
    }

    // Incluir el modelo
    require __DIR__ . "/../modelos/Medico.php";

    // Actualizar los datos del médico
    $resultado = actualizarMedico($id, $nombre, $segundoNombre, $apellidoP, $apellidoM, $fechaNacimiento, $añosServicio, $telParticular);

    // Confirmar éxito o error
    if ($resultado) {
        echo "Actualización exitosa";
    } else {
        echo "Error al actualizar los datos del médico";
    }
?>
