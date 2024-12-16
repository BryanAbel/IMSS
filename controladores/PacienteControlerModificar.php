<?php
    $id = $_POST["idRegistro"];
    $nombre = $_POST["iNombre"];
    $Segundonombre = $_POST["inombre2"];
    $apellidoP = $_POST["iApellidoP"];
    $apellidoM = $_POST["iApellidoM"];
    $Fechanaci = $_POST["iFechaNaci"];
    $telparticular = $_POST["iTelParti"];
    $telfamiliar = $_POST["iiTelfami"];

    echo "Llegué a ControllerModificar"; // Confirmación inicial

    // Validaciones de los datos
    if (empty($id) || empty($nombre) || empty($Segundonombre)|| empty($apellidoP)|| empty($apellidoM)|| empty($Fechanaci)|| empty($telparticular)|| empty($telfamiliar)) {
        echo "Datos incompletos. Verifica el formulario.";
        exit;
    }

    // Incluir el modelo
    require __DIR__ . "/../modelos/Paciente.php";

    // Actualizar la especialidad
    $resultado = actualizarP($id, $nombre, $Segundonombre, $apellidoP, $apellidoM, $Fechanaci, $telparticular, $telfamiliar);

    // Confirmar éxito o error
    if ($resultado) {
        echo "Actualización exitosa";
    } else {
        echo "Error al actualizar la especialidad";
    }
?>