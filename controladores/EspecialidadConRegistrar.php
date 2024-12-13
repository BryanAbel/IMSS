<?php
    $nombre = $_POST["vNombre"];
    $Descrippcion = $_POST["VDescripcion"];
     
    echo $nombre;
    require_once "../modelos/Especialidad.php";

    if(EspecialidadExiste($nombre)){
        echo "Error: esa especialidad ya esta registrada.";
        return;
    }

    registrarEspecialidad($nombre, $descripcion);

?>