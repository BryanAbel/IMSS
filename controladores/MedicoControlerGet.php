<?php
    $idRegistro = $_POST["idMedico"];
    require "../modelos/Medico.php";
    $medico = getMedicoPorId($idRegistro);
?>

<form id="formularioModificacionMedico" method="post">
    <div class="mb-3">
        <input style="display: none" value="<?php echo $medico["ID"] ?>" name="idRegistro">

        <div class="mb-3">
            <label class="form-label">Nombre</label>
            <input value="<?php echo $medico["Nombre"] ?>" type="text" class="form-control" id="nombre" name="iNombre" placeholder="Ingresa el nombre del médico">
        </div>

        <div class="mb-3">
            <label class="form-label">Segundo Nombre</label>
            <input value="<?php echo $medico["SegundoNombre"] ?>" type="text" class="form-control" id="segundoNombre" name="iSegundoNombre" placeholder="Ingresa el segundo nombre del médico">
        </div>

        <div class="mb-3">
            <label class="form-label">Apellido Paterno</label>
            <input value="<?php echo $medico["ApellidoP"] ?>" type="text" class="form-control" id="apellidoP" name="iApellidoPaterno" placeholder="Ingresa el apellido paterno del médico">
        </div>

        <div class="mb-3">
            <label class="form-label">Apellido Materno</label>
            <input value="<?php echo $medico["ApellidoM"] ?>" type="text" class="form-control" id="apellidoM" name="iApellidoMaterno" placeholder="Ingresa el apellido materno del médico">
        </div>

        <div class="mb-3">
            <label class="form-label">Fecha de Nacimiento</label>
            <input value="<?php echo $medico["FechaNacimiento"] ?>" type="date" class="form-control" id="fechaNacimiento" name="iNacimiento">
        </div>

        <div class="mb-3">
            <label class="form-label">Años de Servicio</label>
            <input value="<?php echo $medico["AnosServicio"] ?>" type="number" class="form-control" id="anosServicio" name="iAnos" placeholder="Ingresa los años de servicio">
        </div>

        <div class="mb-3">
            <label class="form-label">Teléfono Particular</label>
            <input value="<?php echo $medico["TelParticular"] ?>" type="text" class="form-control" id="telParticular" name="iTel" placeholder="Ingresa el teléfono particular del médico">
        </div>

    </div>
</form>
