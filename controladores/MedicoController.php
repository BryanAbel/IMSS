<?php

require_once 'modelos/Medico.php';

class MedicoController
{
    public function listar()
    {
        $medicos = Medico::obtenerTodos();
        include 'vistas/medicos/listar.php';
    }

    public function crear()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $idNombre = $_POST['idNombre'];
            $idEspecialidad = $_POST['idEspecialidad'];

            if (Medico::crear($idNombre, $idEspecialidad)) {
                header('Location: /medicos/listar');
            } else {
                echo "Error al crear el médico.";
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

            if (Medico::actualizar($id, $idNombre, $idEspecialidad)) {
                header('Location: /medicos/listar');
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
            header('Location: /medicos/listar');
        } else {
            echo "Error al eliminar el médico.";
        }
    }
}

?>
