function registrarMedico() {
    let datos = $('#formularioRegistroMedico').serialize();  // Obtenemos los datos del formulario
    $.ajax({
        url: 'CRegistroMedico.php',  // Archivo PHP que procesará el registro
        type: 'POST',
        data: datos,
        success: function(response) {
            if (response === "success") {
                cargarTablaMedicos();
                Swal.fire({
                    icon: 'success',
                    title: 'Médico registrado',
                    text: 'El médico ha sido registrado correctamente.'
                });
            } else {
                Swal.fire({
                    icon: 'error',
                    title: 'Error',
                    text: response  // Mostrar el mensaje de error devuelto desde el servidor
                });
            }
        },
        error: function() {
            Swal.fire({
                icon: 'error',
                title: 'Error',
                text: 'No se pudo registrar al médico.'
            });
        }
    });
}

function cargarTablaMedicos() {
    $.ajax({
        url: 'tablaMedicos.php',  // Archivo que devuelve la tabla con los médicos
        type: 'POST',
        success: function(respuesta) {
            document.getElementById("contenidoTablaMedicos").innerHTML = respuesta;
        }
    });
}

function modificarMedico(idMedico) {
    // Provocamos un clic automático para abrir el modal
    $("#btnModalModificarMedico").click();

    $.ajax({
        url: 'formularioModificacionMedico.php',
        type: 'POST',
        data: { "idMedico": idMedico },
        success: function(respuesta) {
            document.getElementById("resultadoModificacionMedico").innerHTML = respuesta;
        }
    });
}

function ModiMedico() {
    let datos = $('#formularioModificacionMedico').serialize();
    $.ajax({
        url: 'CModificarMedico.php',  // Archivo PHP que procesa la actualización
        type: 'POST',
        data: datos,
        success: function(data) {
            cargarTablaMedicos();
            Swal.fire({
                icon: 'success',
                title: 'Médico modificado',
                text: 'El médico ha sido modificado correctamente.'
            });
        },
        error: function() {
            Swal.fire({
                icon: 'error',
                title: 'Error',
                text: 'No se pudo modificar el médico.'
            });
        }
    });
}

function eliminarMedico(idMedico) {
    $.ajax({
        url: 'mEliminarMedico.php',
        type: 'POST',
        data: { "idMedico": idMedico },
        success: function(respuesta) {
            cargarTablaMedicos();
            Swal.fire({
                icon: 'success',
                title: 'Eliminación exitosa',
                text: 'El médico ha sido eliminado correctamente.'
            });
        },
        error: function() {
            Swal.fire({
                icon: 'error',
                title: 'Error',
                text: 'No se pudo eliminar el médico.'
            });
        }
    });
}
