<?php
    // Recogemos los datos del formulario y los sanitizamos
    $nombre = $_POST['iNombre'];
    $segundoNombre = $_POST['iSegundoNombre'];
    $apellidoP = $_POST['iApellidoPaterno'];
    $apellidoM = $_POST['iApellidoMaterno'];
    $fechaNacimiento = $_POST['iNacimiento'];
    $añosServicio = $_POST['iAnos'];
    $telParticular = $_POST['iTel'];


    // Validación de campos obligatorios
    if (empty($nombre) || empty($apellidoP) || empty($fechaNacimiento)) {
        echo "Todos los campos son obligatorios.";
        exit;
    }

    // Incluir la función para registrar el médico
    require "../modelos/Medico.php";

    // Registrar el médico
    try {
        registrarMedico($nombre, $segundoNombre, $apellidoP, $apellidoM, $fechaNacimiento, $añosServicio, $telParticular);

        echo "Médico registrado correctamente.";
    } catch (Exception $e) {
        echo "Error al registrar médico: " . $e->getMessage();
    }
?>
