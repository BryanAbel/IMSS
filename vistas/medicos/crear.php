<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registros doc</title>
<!-- Enlace a la hoja de estilos de Bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="funciones.js?v=5"></script>

</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Features</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pricing</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" aria-disabled="true">Disabled</a>
        </li>
      </ul>
    </div>
  </div>
</nav>



    <div class="container">
    <div class="card shadow p-4 mt-4 mx-auto" style="max-width: 9000%;">
         <h3>REGISTRO DE DOCTORES</h3>
            
         <div class="card shadow p-4 mt-4 mx-auto" style="max-width: ;">
            <form id="formularioRegistro" method="post">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nombre</label>
                    <input type="text" class="form-control" id="nombre" name="iNombre" placeholder="Ingresa nombre">                    
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Segundo nombre</label>
                    <input type="text" class="form-control" id="SegundoNombre" name="iSegundoApellido"  placeholder="Ingresa Segundo Nombre">
                </div>   
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Apellido Paterno</label>
                    <input type="text" class="form-control" id="Ap" name="iApellidoPaterno"  placeholder="Ingresa Apellido Paterno">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Apellido Materno</label>
                    <input type="text" class="form-control" id="Am" name="iApellidoMeaterno"  placeholder="Ingresa Materno">
                </div>     
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">fecha de nacimiento</label>
                    <input type="date" class="form-control" id="Naci" name="iNacimiento"  placeholder="Ingresa Fecha de nacimiento">
                </div>       
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Anos de servicio</label>
                    <input type="text" class="form-control" id="Anos" name="iAnos"  placeholder="Ingresa Anos de Servicio">
                </div>  
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Telefono</label>
                    <input type="text" class="form-control" id="Tel" name="iTel"  placeholder="Ingresa Telefono">
                </div>           
            </form>
            <button type="submit" class="btn btn-primary" onclick="registrar();">Registrar</button>
            <hr>
            <div id="contenidoTablaPersonas"></div>
        </div>
      </div>   
    </div>


 <!--Enlace a JS(jQuery) librería de Javascript para poder utilizar AJAX-->
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- Scripts de Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>