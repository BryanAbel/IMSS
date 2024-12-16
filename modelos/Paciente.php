<?php
function getPacientes() {
    require __DIR__ . "/../Coneccion.php";

    $sql = "SELECT 
        paci.iId AS ID,
        paci.vNombre AS NOMBRE,
        paci.vSegundoNombre AS SEGUNDONOMBRE,
        paci.vApellidoP AS APELLIDOP,
        paci.vApellidoM AS APELLIDOSM,
        paci.dFechaNacimiento AS FECHANACI,
        paci.vTelParticular AS TELPARTI,
        paci.vTelFamiliar AS TELFAMI
    FROM nom_pa AS paci";
    $resultado = $pdo->query($sql);
    if ($resultado === false){
        die("Errir en la cosulta: " . implode(";", $pdo->errirInfo()));
    }
     // Obtener todos los resultados como un arreglo asociativo
    $Pacientes = $resultado->fetchAll(PDO::FETCH_ASSOC);
    
    return $Pacientes;
}
function RegistrarPacientes($Nombre,$Segundonombre, $apellidoP, $apellidoM, $Fechanaci, $telparticular, $telfamiliar){
    require __DIR__ . "/../Coneccion.php";
    try {
        $sql = "INSERT INTO nom_pa(vNombre, vSegundoNombre, vApellidoP, vApellidoM, dFechaNacimiento, vTelParticular, vTelFamiliar)
        VALUES (:nombre, :segundonombre,:apellidop, :apellidom, :fechanaci, :telparti, :telfami)";    

        $stmt = $pdo->prepare($sql);

        $stmt->bindParam(':nombre', $Nombre);
        $stmt->bindParam(':segundonombre',$Segundonombre);
        $stmt->bindParam(':apellidop',$apellidoP);
        $stmt->bindParam(':apellidom',$apellidoM);
        $stmt->bindParam(':fechanaci',$Fechanaci);
        $stmt->bindParam(':telparti',$telparticular);
        $stmt->bindParam(':telfami',$telfamiliar);
        

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

function getPacientePorId($id) {
    require __DIR__ . "/../Coneccion.php";
    $sql = "SELECT 
                paci.iId AS ID,
        paci.vNombre AS NOMBRE,
        paci.vSegundoNombre AS SEGUNDONOMBRE,
        paci.vApellidoP AS APELLIDOP,
        paci.vApellidoM AS APELLIDOSM,
        paci.dFechaNacimiento AS FECHANACI,
        paci.vTelParticular AS TELPARTI,
        paci.vTelFamiliar AS TELFAMI
            FROM nom_pa AS paci
            WHERE paci.iId = :id";

    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':id', $id);
    $stmt->execute();
    
    return $stmt->fetch(PDO::FETCH_ASSOC);  // Devuelve los datos de la especialidad
}

function actualizarPacientes($id,$Nombre,$Segundonombre, $apellidoP, $apellidoM, $Fechanaci, $telparticular, $telfamiliar) {
    require __DIR__ . "/../Coneccion.php";
    echo "llegue";
    try {
        $sql = "UPDATE nom_pa
                SET vNombre = :nombre, 
                vSegundoNombre = :segundonombre,
                vApellidoP = :apellidop,
                vApellidoM = :apellidom,
                dFechaNacimiento = :fechanaci,
                vTelParticular = :telparti,
                vTelFamiliar = :telfami
                WHERE iId = :id";
        
        $stmt = $pdo->prepare($sql);
        
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':nombre', $nombre);
        $stmt->bindParam(':nombre2', $Segundonombre);
        $stmt->bindParam(':apellidop', $apellidoP);
        $stmt->bindParam(':apellidom', $apellidoM);
        $stmt->bindParam(':FechaN', $Fechanaci);
        $stmt->bindParam(':TelP', $telparticular);
        $stmt->bindParam(':TelF', $telfamiliar);
        
        if ($stmt->execute()) {
            echo "Actualización exitosa";            
        } else {
            echo "Error en la ejecución de la consulta";
        }
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}
