<?php
require_once 'Coneccion.php';

function getEspecialidades() {
    $conexion = Coneccion::getConexion();
    $sql = "SELECT * FROM especialidades";
    $resultado = $conexion->query($sql);
    
    $especialidades = [];
    if ($resultado && $resultado->num_rows > 0) {
        while ($especialidad = $resultado->fetch_assoc()) {
            $especialidades[] = $especialidad;
        }
    }
    
    return $especialidades;
}
