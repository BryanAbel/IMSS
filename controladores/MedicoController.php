<?php

require_once 'Coneccion.php';

class Medico
{
    private $id;
    private $idNombre;
    private $idEspecialidad;

    // Constructor
    public function __construct($id = null, $idNombre = null, $idEspecialidad = null)
    {
        $this->id = $id;
        $this->idNombre = $idNombre;
        $this->idEspecialidad = $idEspecialidad;
    }

    // Métodos getter y setter
    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getIdNombre()
    {
        return $this->idNombre;
    }

    public function setIdNombre($idNombre)
    {
        $this->idNombre = $idNombre;
    }

    public function getIdEspecialidad()
    {
        return $this->idEspecialidad;
    }

    public function setIdEspecialidad($idEspecialidad)
    {
        $this->idEspecialidad = $idEspecialidad;
    }

    // Método para crear un nuevo médico
    public function crear()
    {
        $conexion = Coneccion::getConexion();

        $sql = "INSERT INTO medicos (iIdNombre, iIdEspecialidad) VALUES (?, ?)";
        $stmt = $conexion->prepare($sql);
        $stmt->bind_param("ii", $this->idNombre, $this->idEspecialidad);
        $stmt->execute();
    }

    // Método para obtener todos los médicos
    public static function obtenerTodos()
    {
        $conexion = Coneccion::getConexion();

        $sql = "SELECT m.iId, n.vNombre, n.vSegundoNombre, n.vAp, n.vAm, n.dFechaNacimiento, n.iAñosServicio, n.iTelParticular, e.vNombre AS especialidad 
                FROM medicos m
                INNER JOIN nom_doc n ON m.iIdNombre = n.iId
                INNER JOIN especialidades e ON m.iIdEspecialidad = e.iId";
        
        $result = $conexion->query($sql);
        $medicos = [];

        while ($row = $result->fetch_assoc()) {
            $medico = new Medico(
                $row['iId'],
                $row['vNombre'],
                $row['iIdEspecialidad']
            );
            $medicos[] = $medico;
        }
        return $medicos;
    }

    // Método para obtener un médico por su ID
    public static function obtenerPorId($id)
    {
        $conexion = Coneccion::getConexion();

        $sql = "SELECT m.iId, n.vNombre, n.vSegundoNombre, n.vAp, n.vAm, n.dFechaNacimiento, n.iAñosServicio, n.iTelParticular, e.vNombre AS especialidad
                FROM medicos m
                INNER JOIN nom_doc n ON m.iIdNombre = n.iId
                INNER JOIN especialidades e ON m.iIdEspecialidad = e.iId
                WHERE m.iId = ?";
        
        $stmt = $conexion->prepare($sql);
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $result = $stmt->get_result();
        
        if ($row = $result->fetch_assoc()) {
            return new Medico(
                $row['iId'],
                $row['vNombre'],
                $row['iIdEspecialidad']
            );
        }
        return null;
    }

    // Método para actualizar la información de un médico
    public function actualizar()
    {
        $conexion = Coneccion::getConexion();

        $sql = "UPDATE medicos SET iIdNombre = ?, iIdEspecialidad = ? WHERE iId = ?";
        $stmt = $conexion->prepare($sql);
        $stmt->bind_param("iii", $this->idNombre, $this->idEspecialidad, $this->id);
        $stmt->execute();
    }

    // Método para eliminar un médico
    public static function eliminar($id)
    {
        $conexion = Coneccion::getConexion();

        $sql = "DELETE FROM medicos WHERE iId = ?";
        $stmt = $conexion->prepare($sql);
        $stmt->bind_param("i", $id);
        $stmt->execute();
    }
}
?>
