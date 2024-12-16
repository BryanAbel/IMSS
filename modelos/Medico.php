<?php
function getMedicos() {
    require __DIR__ . "/../Coneccion.php";

    $sql = "SELECT 
                iId AS ID,
                vNombre, vSegundoNombre, vApellidoP, vApellidoM, 
                dFechaNacimiento, iAñosServicio, vTelParticular
            FROM nom_doc";
    $resultado = $pdo->query($sql);
    if ($resultado === false) {
        die("Error en la consulta: " . implode(";", $pdo->errorInfo()));
    }
    
    return $resultado->fetchAll(PDO::FETCH_ASSOC);
}


function registrarMedico($nombre, $segundoNombre, $apellidoP, $apellidoM, $fechaNacimiento, $añosServicio, $telParticular) {
    require __DIR__ . "/../Coneccion.php"; // Incluir la conexión a la base de datos

    try {
        // Mostrar los datos recibidos para depuración (opcional)
        echo "Datos recibidos: Nombre - $nombre, Segundo Nombre - $segundoNombre, Apellido P - $apellidoP, Apellido M - $apellidoM, Fecha Nacimiento - $fechaNacimiento, Años de Servicio - $añosServicio, Tel Particular - $telParticular<br>";

        // Consulta SQL para insertar un nuevo médico
        $sql = "INSERT INTO nom_doc(vNombre, vSegundoNombre, vApellidoP, vApellidoM, dFechaNacimiento, iAñosServicio, vTelParticular)
                VALUES (:nombre, :segundoNombre, :apellidoP, :apellidoM, :fechaNacimiento, :añosServicio, :telParticular)";    

        // Preparar la consulta
        $stmt = $pdo->prepare($sql);

        // Enlazar los parámetros con la consulta SQL
        $stmt->bindParam(':nombre', $nombre);
        $stmt->bindParam(':segundoNombre', $segundoNombre);
        $stmt->bindParam(':apellidoP', $apellidoP);
        $stmt->bindParam(':apellidoM', $apellidoM);
        $stmt->bindParam(':fechaNacimiento', $fechaNacimiento);
        $stmt->bindParam(':añosServicio', $añosServicio);
        $stmt->bindParam(':telParticular', $telParticular);

        // Ejecutar la consulta
        if ($stmt->execute()) {
            echo "Médico registrado correctamente";            
        } else {
            echo "Error al ejecutar la consulta";
        }
    } catch (PDOException $e) {
        // Captura de errores en caso de excepción
        echo "Error: " . $e->getMessage();
    }
}





function getMedicoPorId($id) {
    require __DIR__ . "/../Coneccion.php";

    $sql = "SELECT iId as ID,
                vNombre AS Nombre,
                vSegundoNombre AS SegundoNombre,
                vApellidoP AS ApellidoP,
                vApellidoM AS ApellidoM,
                dFechaNacimiento AS FechaNacimiento,
                iAñosServicio AS AnosServicio,
                vTelParticular AS TelParticular
            FROM nom_doc
            WHERE iId = :id";

    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':id', $id);
    $stmt->execute();

    return $stmt->fetch(PDO::FETCH_ASSOC);
}


function actualizarMedico($id, $nombre, $segundoNombre, $apellidoP, $apellidoM, $fechaNacimiento, $añosServicio, $telParticular) {
    require __DIR__ . "/../Coneccion.php";

    try {
        $sql = "UPDATE nom_doc 
                SET vNombre = :nombre, vSegundoNombre = :segundoNombre, vApellidoP = :apellidoP, vApellidoM = :apellidoM, 
                    dFechaNacimiento = :fechaNacimiento, iAñosServicio = :añosServicio, vTelParticular = :telParticular
                WHERE iId = :id";
        
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':nombre', $nombre);
        $stmt->bindParam(':segundoNombre', $segundoNombre);
        $stmt->bindParam(':apellidoP', $apellidoP);
        $stmt->bindParam(':apellidoM', $apellidoM);
        $stmt->bindParam(':fechaNacimiento', $fechaNacimiento);
        $stmt->bindParam(':añosServicio', $añosServicio);
        $stmt->bindParam(':telParticular', $telParticular);

        if ($stmt->execute()) {
            echo "Actualización exitosa";
        } else {
            echo "Error en la ejecución de la consulta";
        }
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}

function eliminarMedico($id) {
    require __DIR__ . "/../Coneccion.php";

    try {
        $sql = "DELETE FROM nom_doc WHERE iId = :id";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':id', $id);
        
        if ($stmt->execute()) {
            echo "Eliminación exitosa";
        } else {
            echo "Error en la eliminación";
        }
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}
