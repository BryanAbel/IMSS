<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registros doc</title>
    <!-- Enlace a la hoja de estilos de Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Enlace a SweetAlert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>    
    <script src="http://localhost/Imss/js/funciones.js?v=14"></script>
</head>
<body>
    
    <div class="container">
        <div class="card shadow p-4 mt-4 mx-auto" style="max-width: 900%;">
            <h3>REGISTRO DEL PACIENTE</h3>
            
            <div class="card shadow p-4 mt-4 mx-1">
                <form id="FormularioRegistroPaciente" method="post">
                    <div class="row">
                        <!-- Primera columna -->
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="nombre" class="form-label">Nombre</label>
                                <input type="text" class="form-control" id="nombre" name="iNombre" placeholder="Ingresa nombre">
                            </div>
                            <div class="mb-3">
                                <label for="SegundoNombre" class="form-label">Segundo nombre</label>
                                <input type="text" class="form-control" id="SegundoNombre" name="iSegundoNombre" placeholder="Ingresa Segundo Nombre">
                            </div>
                            <div class="mb-3">
                                <label for="Ap" class="form-label">Apellido Paterno</label>
                                <input type="text" class="form-control" id="Ap" name="iApellidoPaterno" placeholder="Ingresa Apellido Paterno">
                            </div>
                            <div class="mb-3">
                                <label for="Am" class="form-label">Apellido Materno</label>
                                <input type="text" class="form-control" id="Am" name="iApellidoMaterno" placeholder="Ingresa Apellido Materno">
                            </div>
                        </div>
                        <!-- Segunda columna -->
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="Naci" class="form-label">Fecha de nacimiento</label>
                                <input type="date" class="form-control" id="Naci" name="iNacimiento" placeholder="Ingresa Fecha de nacimiento">
                            </div>
                            <div class="mb-3">
                                <label for="Anos" class="form-label">Teléfono Particular</label>
                                <input type="text" class="form-control" id="TElP" name="iTelP" placeholder="Ingresa Teléfono">
                            </div>
                            <div class="mb-3">
                                <label for="Tel" class="form-label">Teléfono Familiar</label>
                                <input type="text" class="form-control" id="TelM" name="iTelM" placeholder="Ingresa Teléfono Familiar">
                            </div>
                            <div class="mb-3 text-end">
                                
                            </div>
                        </div>
                        <button type="button" class="btn btn-primary" onclick="registrarPaciente();">Registrar</button>
                        <br>
                       
                    </div>
                </form>
                
                <hr>
                 <!-- Mostrar especialidades -->
    <div class="container">
        <div class="card shadow p-4 mt-4 mx-auto" style="max-width: 900%;">
            <div id="contenidoTablaPacientes">
                <!-- Aquí se cargarán las especialidades -->
                
            </div>
        </div>
    </div>
    <script>
        // Llamar a la función de cargar la tabla cuando se carga la página
        $(document).ready(function () {
            //aqui se cambia cargarTablaEspecialidades() por cargar tabla personas
            cargarTablaEspecialidades();
        });
    </script>
              

    <!-- Enlace a JS (jQuery) librería de JavaScript para poder utilizar AJAX -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- Scripts de Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>


</body>
</html>
