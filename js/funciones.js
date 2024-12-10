function registrarMedico() {
    event.preventDefault();  // Previene que el formulario se envíe de manera tradicional

    let datos = $('#formularioRegistro').serialize();  // Obtenemos los datos del formulario

    $.ajax({
        url: '/medicos/registro',  // Esta es la ruta que se encargará de llamar al controlador CRegistroMedico
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
