<?php
    $nombre = $_POST["vNombre"];
    $descripcion = $_POST["VDescripcion"];
     echo "ya llegue";
    echo $nombre;
    require_once "../modelos/Especialidad.php";

    if(EspecialidadExiste($nombre)){
        echo "Error: esa especialidad ya esta registrada.";
        return;
    }

    registrarEspecialidad($nombre, $descripcion);

?>