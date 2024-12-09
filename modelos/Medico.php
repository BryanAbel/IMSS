<?php
require_once 'modelos/Medico.php';  // Incluir el modelo del médico

class CRegistroMedico {
    public function registrarMedico() {
        // Aquí procesamos los datos enviados desde el formulario
        $idNombre = $_POST['idNombre'];
        $idEspecialidad = $_POST['idEspecialidad'];

        // Crear el objeto Medico y llamar al método para registrar
        $medico = new Medico(null, $idNombre, $idEspecialidad);
        $medico->crear();

        // Redirigir a la página de listado de médicos
        header("Location: /medicos/listar");
    }
}
?>
