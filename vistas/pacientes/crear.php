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
    <script src="../../js/funciones.js?v=5"></script>
</head>
<body>

    <div class="container">
        <div class="card shadow p-4 mt-4 mx-auto" style="max-width: 900%;">
            <h3>REGISTRO DEL PACIENTE</h3>
            
            <div class="card shadow p-4 mt-4 mx-1">
                <form id="FormularioRegistroMedico" method="post">
                    <div class="row">
                        <!-- Primera columna -->
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="nombre" class="form-label">Nombre</label>
                                <input type="text" class="form-control" id="nombre" name="iNombre" placeholder="Ingresa nombre">
                            </div>
                            <div class="mb-3">
                                <label for="SegundoNombre" class="form-label">Segundo nombre</label>
                                <input type="text" class="form-control" id="SegundoNombre" name="iSegundoApellido" placeholder="Ingresa Segundo Nombre">
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
                    </div>
                </form>
                
                <hr>

                <!-- Tabla para mostrar los registros -->
                <div id="contenidoTablaPersonas">
                    <table class="table table-striped table-bordered mt-4">
                        <thead class="table-dark">
                            <tr>
                                <th>Nombre</th>
                                <th>Segundo Nombre</th>
                                <th>Apellido Paterno</th>
                                <th>Apellido Materno</th>
                                <th>Fecha Nacimiento</th>
                                <th>Teléfono Particular</th>
                                <th>Teléfono Familiar</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody id="tablaPacientes">
                            <!-- Las filas se agregarán dinámicamente -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Enlace a JS (jQuery) librería de JavaScript para poder utilizar AJAX -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- Scripts de Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        function registrarPaciente() {
            // Obtener los datos del formulario
            const nombre = document.getElementById('nombre').value;
            const segundoNombre = document.getElementById('SegundoNombre').value;
            const apellidoPaterno = document.getElementById('Ap').value;
            const apellidoMaterno = document.getElementById('Am').value;
            const fechaNacimiento = document.getElementById('Naci').value;
            const telefonoParticular = document.getElementById('TElP').value;
            const telefonoFamiliar = document.getElementById('TelM').value;

            // Crear una nueva fila en la tabla
            const tabla = document.getElementById('tablaPacientes');
            const nuevaFila = tabla.insertRow();

            nuevaFila.innerHTML = `
                <td>${nombre}</td>
                <td>${segundoNombre}</td>
                <td>${apellidoPaterno}</td>
                <td>${apellidoMaterno}</td>
                <td>${fechaNacimiento}</td>
                <td>${telefonoParticular}</td>
                <td>${telefonoFamiliar}</td>
                <td>
                    <button class="btn btn-warning btn-sm" onclick="editarRegistro(this);">Editar</button>
                    <button class="btn btn-danger btn-sm" onclick="eliminarRegistro(this);">Eliminar</button>
                </td>
            `;

            // Limpiar el formulario
            document.getElementById('FormularioRegistroMedico').reset();
        }

        function editarRegistro(boton) {
            const fila = boton.parentElement.parentElement;
            const celdas = fila.querySelectorAll('td');

            Swal.fire({
                title: 'Editar Registro',
                html: `
                    <input id="swalNombre" class="swal2-input" value="${celdas[0].innerText}">
                    <input id="swalSegundoNombre" class="swal2-input" value="${celdas[1].innerText}">
                    <input id="swalApellidoPaterno" class="swal2-input" value="${celdas[2].innerText}">
                    <input id="swalApellidoMaterno" class="swal2-input" value="${celdas[3].innerText}">
                    <input id="swalFechaNacimiento" type="date" class="swal2-input" value="${celdas[4].innerText}">
                    <input id="swalTelefonoParticular" class="swal2-input" value="${celdas[5].innerText}">
                    <input id="swalTelefonoFamiliar" class="swal2-input" value="${celdas[6].innerText}">
                `,
                confirmButtonText: 'Guardar',
                preConfirm: () => {
                    return [
                        document.getElementById('swalNombre').value,
                        document.getElementById('swalSegundoNombre').value,
                        document.getElementById('swalApellidoPaterno').value,
                        document.getElementById('swalApellidoMaterno').value,
                        document.getElementById('swalFechaNacimiento').value,
                        document.getElementById('swalTelefonoParticular').value,
                        document.getElementById('swalTelefonoFamiliar').value
                    ];
                }
            }).then((result) => {
                if (result.isConfirmed) {
                    const datos = result.value;
                    celdas[0].innerText = datos[0];
                    celdas[1].innerText = datos[1];
                    celdas[2].innerText = datos[2];
                    celdas[3].innerText = datos[3];
                    celdas[4].innerText = datos[4];
                    celdas[5].innerText = datos[5];
                    celdas[6].innerText = datos[6];
                }
            });
        }

        function eliminarRegistro(boton) {
            const fila = boton.parentElement.parentElement;
            fila.remove();
        }
    </script>

</body>
</html>
