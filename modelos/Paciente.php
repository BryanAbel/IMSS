require_once 'Coneccion.php';

class Paciente {
    private $conexion;

    public function __construct() {
        $db = new Coneccion();
        $this->conexion = $db->conectar();
    }

    // Crear un nuevo paciente
    public function agregarPaciente($idNombre, $fechaRegistro, $idTratamiento) {
        $query = "INSERT INTO pacientes (Id_nombre, Fecha_de_registro, Id_tratamiento) 
                  VALUES (:idNombre, :fechaRegistro, :idTratamiento)";
        $stmt = $this->conexion->prepare($query);
        $stmt->bindParam(':idNombre', $idNombre);
        $stmt->bindParam(':fechaRegistro', $fechaRegistro);
        $stmt->bindParam(':idTratamiento', $idTratamiento);

        return $stmt->execute();
    }

    // Leer todos los pacientes
    public function listarPacientes() {
        $query = "SELECT 
                    p.id, 
                    n.Nombre, n.Nombre_2, n.Ap, n.Am, 
                    p.Fecha_de_registro, 
                    t.Nombre AS Tratamiento 
                  FROM pacientes p
                  INNER JOIN nom_pa n ON p.Id_nombre = n.Id
                  INNER JOIN tratamientos t ON p.Id_tratamiento = t.Id";
        $stmt = $this->conexion->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    // Actualizar un paciente
    public function actualizarPaciente($id, $idNombre, $fechaRegistro, $idTratamiento) {
        $query = "UPDATE pacientes 
                  SET Id_nombre = :idNombre, Fecha_de_registro = :fechaRegistro, Id_tratamiento = :idTratamiento 
                  WHERE id = :id";
        $stmt = $this->conexion->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':idNombre', $idNombre);
        $stmt->bindParam(':fechaRegistro', $fechaRegistro);
        $stmt->bindParam(':idTratamiento', $idTratamiento);

        return $stmt->execute();
    }

    // Eliminar un paciente
    public function eliminarPaciente($id) {
        $query = "DELETE FROM pacientes WHERE id = :id";
        $stmt = $this->conexion->prepare($query);
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
    }
}
