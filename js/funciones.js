document.addEventListener('DOMContentLoaded', function () {
    const formulario = document.getElementById('FormularioRegistroMedico');

    // Capturar el evento submit del formulario
    formulario.addEventListener('submit', function (e) {
        e.preventDefault(); // Evitar el envío tradicional del formulario

        // Serializar los datos del formulario
        let datos = $(this).serialize();

        // Realizar la petición AJAX
        $.ajax({
            url: '/medicos/registro',  // Ruta al controlador
            type: 'POST',
            data: datos,
            success: function (response) {
                if (response === "success") {
                    cargarTablaMedicos(); // Actualiza la tabla
                    Swal.fire({
                        icon: 'success',
                        title: 'Médico registrado',
                        text: 'El médico ha sido registrado correctamente.'
                    });
                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'Error',
                        text: response
                    });
                }
            },
            error: function () {
                Swal.fire({
                    icon: 'error',
                    title: 'Error',
                    text: 'No se pudo registrar al médico.'
                });
            }
        });
    });
});

// Función para cargar la tabla de médicos
function cargarTablaMedicos() {
    $.ajax({
        url: '/medicos/listar', // Ruta para obtener la lista de médicos
        type: 'GET',
        success: function (data) {
            $('#contenidoTablaPersonas').html(data);
        },
        error: function () {
            Swal.fire({
                icon: 'error',
                title: 'Error',
                text: 'No se pudo cargar la tabla de médicos.'
            });
        }
    });
}
