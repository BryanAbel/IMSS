<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registros cita</title>
    <!-- Enlace a la hoja de estilos de Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
     <!-- Enlace a sweed alert -->
     <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>    

    <script src="../../js/funciones.js?v=5"></script>
</head>
<body>

    <div class="container">
        <div class="card shadow p-4 mt-4 mx-auto" style="max-width: 900%;">
            <h3>REGISTRO DE CITAS</h3>
            
            <div class="card shadow p-4 mt-4 mx-1">
    <form id="FormularioRegistroMedico" method="post">
        <div class="row">
            <!-- Primera columna -->
            <div class="col-md-6">
            <div class="mb-3">
                <label for="">nombre del paciente</label>
                        <select name="pacientes" id="paci" class="form-control">
                            <?php //HACER EL REQUIRE DEL MODLEO PARA OBTEBER LOS DATOS DE LOS PACIENTES Y LLENAR EL SELECT CON UN WHILE O FOREACH ?>
                            <option value="1">oliver uriel reyes baeza</option>
                            <option value="2">bryan abel cordova lopez</option>
                            <option value="3">Miguel angel betancourt</option>
                        </select>
                
                
               

            </div>
             
            <div class="mb-3">
                    <label for="motivo" class="form-label">motivo de cita</label>
                    <input type="text" class="form-control" id="motivo" name="imotivo" placeholder="Ingresa el motivo de cita">
                </div>

            </div>
            <!-- Segunda columna -->
            <div class="col-md-6">
                
            <div class="mb-3">
            <label for="">nombre del doctor</label>
                <select name="" id="" class="form-control">
                    <?php //HACER EL REQUIRE DEL MODLEO PARA OBTEBER LOS DATOS DE LOS PACIENTES Y LLENAR EL SELECT CON UN WHILE O FOREACH ?>
                    <option value="1">Dr. Oliver Euriel</option>
                    <option value="2">Dr. Roberto Lopez</option>
                    <option value="3">Dr. Hugo Euriel</option>
                </select>
            </div>

                <div class="mb-3">
                    <label for="Naci" class="form-label">Fecha de cita</label>
                    <input type="date" class="form-control" id="cita" name="iCita" placeholder="Ingresa Fecha de cita">
                </div>
               
                </div>
            </div>
            <button type="button" class="btn btn-primary" onclick="registrarPaciente();">Registrar</button>
        </div>
    </form>
    <hr>
    <div id="contenidoTablaPersonas"></div>
</div>

        </div>
    </div>

    <!-- Enlace a JS (jQuery) librería de JavaScript para poder utilizar AJAX -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- Scripts de Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>