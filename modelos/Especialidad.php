<?php
function getEspecialidades() {
    require __DIR__ . "/../Coneccion.php";

    $sql = "SELECT 
        espe.iId AS ID,
        espe.vNombre AS Nombre,
        espe.vDescripcion AS Descripcion
    FROM especialidades AS espe";
    $resultado = $pdo->query($sql);
    if ($resultado === false){
        die("Errir en la cosulta: " . implode(";", $pdo->errirInfo()));
    }
     // Obtener todos los resultados como un arreglo asociativo
    $especialidades = $resultado->fetchAll(PDO::FETCH_ASSOC);
    
    return $especialidades;
}
function registrarEspecialidad($nombre, $descripcion){
    require __DIR__ . "/../Coneccion.php";
    try {
        echo "Datos recibidos: Nombre - $nombre, Descripción - $descripcion<br>";
        $sql = "INSERT INTO especialidades(vNombre, vDescripcion)
        VALUES (:nombre, :descripcion)";    

        $stmt = $pdo->prepare($sql);

        $stmt->bindParam(':nombre', $nombre);
        $stmt->bindParam(':descripcion',$descripcion);

        if ($stmt->execute()) {
            echo "Registro exitoso";            
        } else {
            echo "Error en la ejecución de la consulta";
        }
    } catch (PDOException $e) {
        // Captura de errores en caso de excepción
        echo "Error: " . $e->getMessage();
    }
}
function EspecialidadExiste($nombre) {
    require __DIR__ . "/../Coneccion.php";

    $query = "SELECT COUNT(*) FROM especialidades WHERE vNombre = :Nombre";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(':Nombre', $nombre);
    $stmt->execute();
    return $stmt->fetchColumn() > 0; // Devuelve true si el correo ya existe
}
