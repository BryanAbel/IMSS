<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registros doc</title>
    <!-- Enlace a la hoja de estilos de Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<<<<<<< HEAD
=======
    <script src="../../js/funciones.js?v=5"></script>
>>>>>>> 122c792ec9e0eb929b5dffe9ef5e0eb8541a8176
</head>
<body>

    <div class="container">
        <div class="card shadow p-4 mt-4 mx-auto" style="max-width: 900%;">
            <h3>REGISTRO DE DOCTORES</h3>
            
            <div class="card shadow p-4 mt-4 mx-1">
                <form id="FormularioRegistroMedico" method="post">
                    <div class="mb-3">
                        <label for="nombre" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="nombre" name="iNombre" placeholder="Ingresa nombre" required>
                    </div>
                    <div class="mb-3">
                        <label for="SegundoNombre" class="form-label">Segundo nombre</label>
                        <input type="text" class="form-control" id="SegundoNombre" name="iSegundoApellido" placeholder="Ingresa Segundo Nombre">
                    </div>
                    <div class="mb-3">
                        <label for="Ap" class="form-label">Apellido Paterno</label>
                        <input type="text" class="form-control" id="Ap" name="iApellidoPaterno" placeholder="Ingresa Apellido Paterno" required>
                    </div>
                    <div class="mb-3">
                        <label for="Am" class="form-label">Apellido Materno</label>
                        <input type="text" class="form-control" id="Am" name="iApellidoMeaterno" placeholder="Ingresa Apellido Materno" required>
                    </div>
                    <div class="mb-3">
                        <label for="Naci" class="form-label">Fecha de nacimiento</label>
                        <input type="date" class="form-control" id="Naci" name="iNacimiento" required>
                    </div>
                    <div class="mb-3">
                        <label for="Anos" class="form-label">Años de servicio</label>
                        <input type="number" class="form-control" id="Anos" name="iAnos" placeholder="Ingresa Años de Servicio" required>
                    </div>
                    <div class="mb-3">
                        <label for="Tel" class="form-label">Teléfono</label>
                        <input type="text" class="form-control" id="Tel" name="iTel" placeholder="Ingresa Teléfono" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Registrar</button>
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
    <!-- Archivo de funciones -->
    <script src="funciones.js?v=5"></script>
</body>
</html>
