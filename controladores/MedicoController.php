<?php

require_once 'modelos/Medico.php';

class MedicoController
{
    public function listar()
    {
        $medicos = Medico::obtenerTodos();

        // Incluir solo la tabla desde listar.php
        include 'vistas/medicos/listar.php';
    }


    public function crear()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $idNombre = $_POST['idNombre'];
            $idEspecialidad = $_POST['idEspecialidad'];

            // Intentar crear el médico
            if (Medico::crear($idNombre, $idEspecialidad)) {
                echo "success"; // Respuesta para solicitudes AJAX
            } else {
                echo "Error al crear el médico."; // Respuesta de error
            }
        } else {
            include 'vistas/medicos/crear.php';
        }
    }

    public function editar($id)
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $idNombre = $_POST['idNombre'];
            $idEspecialidad = $_POST['idEspecialidad'];

            // Intentar actualizar el médico
            if (Medico::actualizar($id, $idNombre, $idEspecialidad)) {
                echo "success";
            } else {
                echo "Error al actualizar el médico.";
            }
        } else {
            $medico = Medico::obtenerPorId($id);
            include 'vistas/medicos/editar.php';
        }
    }

    public function eliminar($id)
    {
        if (Medico::eliminar($id)) {
            echo "success";
        } else {
            echo "Error al eliminar el médico.";
        }
    }
}

?>
