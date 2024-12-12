<?php

require_once 'Coneccion.php';

class Medico
{
    public static function crear($idNombre, $idEspecialidad)
    {
        $conexion = Coneccion::getConexion();

        $sql = "INSERT INTO medicos (iIdNombre, iIdEspecialidad) VALUES (?, ?)";
        $stmt = $conexion->prepare($sql);
        $stmt->bind_param("ii", $idNombre, $idEspecialidad);
        $stmt->execute();

        return $stmt->affected_rows > 0;
    }

    public static function obtenerTodos()
    {
        $conexion = Coneccion::getConexion();

        $sql = "SELECT 
                    m.iId AS medicoId, 
                    n.vNombre, 
                    n.vSegundoNombre, 
                    n.vApellidoP, 
                    n.vApellidoM, 
                    n.dFechaNacimiento, 
                    n.iAñosServicio, 
                    n.vTelParticular, 
                    e.vNombre AS especialidad
                FROM medicos m
                INNER JOIN nom_doc n ON m.iIdNombre = n.iId
                INNER JOIN especialidades e ON m.iIdEspecialidad = e.iId";

        $result = $conexion->query($sql);
        $medicos = [];

        while ($row = $result->fetch_assoc()) {
            $medicos[] = $row;
        }

        return $medicos;
    }

    public static function obtenerPorId($id)
    {
        $conexion = Coneccion::getConexion();

        $sql = "SELECT 
                    m.iId AS medicoId, 
                    n.vNombre, 
                    n.vSegundoNombre, 
                    n.vApellidoP, 
                    n.vApellidoM, 
                    n.dFechaNacimiento, 
                    n.iAñosServicio, 
                    n.vTelParticular, 
                    e.vNombre AS especialidad
                FROM medicos m
                INNER JOIN nom_doc n ON m.iIdNombre = n.iId
                INNER JOIN especialidades e ON m.iIdEspecialidad = e.iId
                WHERE m.iId = ?";

        $stmt = $conexion->prepare($sql);
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $result = $stmt->get_result();

        return $result->fetch_assoc();
    }

    public static function actualizar($id, $idNombre, $idEspecialidad)
    {
        $conexion = Coneccion::getConexion();

        $sql = "UPDATE medicos SET iIdNombre = ?, iIdEspecialidad = ? WHERE iId = ?";
        $stmt = $conexion->prepare($sql);
        $stmt->bind_param("iii", $idNombre, $idEspecialidad, $id);
        $stmt->execute();

        return $stmt->affected_rows > 0;
    }

    public static function eliminar($id)
    {
        $conexion = Coneccion::getConexion();

        $sql = "DELETE FROM medicos WHERE iId = ?";
        $stmt = $conexion->prepare($sql);
        $stmt->bind_param("i", $id);
        $stmt->execute();

        return $stmt->affected_rows > 0;
    }
}

?>
