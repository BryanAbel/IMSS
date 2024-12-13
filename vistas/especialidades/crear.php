<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registros doc</title>
    <!-- Enlace a la hoja de estilos de Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Enlace a sweetalert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    
    <!-- Primero se carga jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- Luego se carga tu archivo de funciones.js -->
    <script src="http://localhost/Imss/js/funciones.js?v=5"></script>


</head>
<body>

    <div class="container">
        <div class="card shadow p-4 mt-4 mx-auto" style="max-width: 900%;">
            <h3>REGISTRO DE ESPECIALIDAD</h3>
            
            <div class="card shadow p-4 mt-4 mx-1">
    <form id="FormularioRegistroMedico" method="post">
        <div class="row">
            
                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre de la especialidad</label>
                    <input type="text" class="form-control" id="nombre" name="iNombre" placeholder="Ingresa nombre">
                </div>
                <div class="mb-3">
                    <label for="SegundoNombre" class="form-label">descripcion</label>
                    <input type="text" class="form-control" id="Descripcion" name="iDescripcion" placeholder="Ingresa una descripcion">
                </div>
                
            
            
            <button type="button" class="btn btn-primary" onclick="registrarEspecialidad();">Registrar</button>
        </div>
    </form>
    <hr>
    <div id="contenidoTablaPersonas"></div>
</div>

        </div>
    </div>
    <!-- Mostrar especialidades -->
    <div class="container">
        <div class="card shadow p-4 mt-4 mx-auto" style="max-width: 900%;">
            <h3>ESPECIALIDADES REGISTRADAS</h3>
            <div id="tablaEspecialidades">
                <!-- Aquí se cargarán las especialidades -->
            </div>
           

        </div>
    </div>


    <!-- Enlace a JS (jQuery) librería de JavaScript para poder utilizar AJAX -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- Scripts de Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>