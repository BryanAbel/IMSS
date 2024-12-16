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
function getEspecialidadPorId($id) {
    require __DIR__ . "/../Coneccion.php";
    $sql = "SELECT 
                espe.iId AS ID,
                espe.vNombre AS Nombre,
                espe.vDescripcion AS Descripcion
            FROM especialidades AS espe
            WHERE espe.iId = :id";

    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':id', $id);
    $stmt->execute();
    
    return $stmt->fetch(PDO::FETCH_ASSOC);  // Devuelve los datos de la especialidad
}
function actualizarEspecialidad($id, $nombre, $descripcion) {
    require __DIR__ . "/../Coneccion.php";
    echo "llegue";
    try {
        $sql = "UPDATE especialidades
                SET vNombre = :nombre, vDescripcion = :descripcion
                WHERE iId = :id";
        
        $stmt = $pdo->prepare($sql);
        
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':nombre', $nombre);
        $stmt->bindParam(':descripcion', $descripcion);
        
        if ($stmt->execute()) {
            echo "Actualización exitosa";            
        } else {
            echo "Error en la ejecución de la consulta";
        }
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}
