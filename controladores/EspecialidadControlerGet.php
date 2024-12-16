<?php
    $idRegistro = $_POST["idEspecialidad"];
    require "../modelos/Especialidad.php";
    $especialidad = getEspecialidadPorId($idRegistro);

    
?>
    <form id="formularioModificacionEspecialidad" method="post">
    <div class="mb-3">
            <input style="display: none"  value= "<?php echo $especialidad["ID"] ?>" name="idRegistro" >                    
        
        <div class="mb-3">
            <label  class="form-label">Nombre</label>
            <input value= "<?php echo $especialidad["Nombre"] ?>" type="text" class="form-control" id="nombre" name="iNombre" placeholder="Ingresa el nombre de la especialidad">                    
        </div>
        <div class="mb-3">
            <label  class="form-label">Descripcion</label>
            <input value="<?php echo $especialidad["Descripcion"] ?>" type="text" class="form-control" id="Descripcion" name="iDescripcion"  placeholder="Ingresa la Descripcion">
        </div> 

    </form>