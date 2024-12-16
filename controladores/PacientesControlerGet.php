<?php
    $idRegistro = $_POST["idEspecialidad"];
    require "../modelos/Paciente.php";
    $idPacientes = getpacientesPorId($idRegistro);

    
?>
    <form id="formularioModificacionPacientes" method="post">
    <div class="mb-3">
            <input style="display: none"  value= "<?php echo $idPacientes["ID"] ?>" name="idRegistro" >                    
        
        <div class="mb-3">
            <label  class="form-label">Nombre</label>
            <input value= "<?php echo $idPacientes["Nombre"] ?>" type="text" class="form-control" id="nombre" name="iNombre" placeholder="Ingresa el nombre">                    
        </div>
        <div class="mb-3">
            <label  class="form-label">Segundo Nombre</label>
            <input value="<?php echo $idPacientes["SegundoNombre"] ?>" type="text" class="form-control" id="nombre2" name="iNombre2"  placeholder="Ingresa el segundo nombre">
        </div> <div class="mb-3">
            <label  class="form-label">Apellido Paterno</label>
            <input value="<?php echo $idPacientes["ApellidoP"] ?>" type="text" class="form-control" id="apellidop" name="iApellidoP"  placeholder="Ingresa el apellido peterno">
        </div> 
        <div class="mb-3">
            <label  class="form-label">Apellido Materno</label>
            <input value="<?php echo $idPacientes["ApellidoM"] ?>" type="text" class="form-control" id="apellidoa" name="iApellidoA"  placeholder="Ingresa el apellido materno">
        </div> 
        <div class="mb-3">
            <label  class="form-label">Fecha de Nacimiento</label>
            <input value="<?php echo $idPacientes["FechaN"] ?>" type="text" class="form-control" id="fechanaci" name="iFechaNaci"  placeholder="Ingresa la fecha de nacimiento">
        </div> <div class="mb-3">
            <label  class="form-label">Telefono Particular</label>
            <input value="<?php echo $idPacientes["TelP"] ?>" type="text" class="form-control" id="telparti" name="iTelParti"  placeholder="Ingresa el telefono particular">
        </div> 
        <div class="mb-3">
            <label  class="form-label">telefono Familiar</label>
            <input value="<?php echo $idPacientes["TelF"] ?>" type="text" class="form-control" id="telfami" name="iTelfami"  placeholder="Ingresa el telefono familiar">
        </div> 

    </form>