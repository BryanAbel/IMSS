
function registrarMedico() {
    const datos = $("#FormularioRegistroMedico").serialize(); // Serializa los datos del formulario

    $.ajax({
        url: '/medicos/crear', // Ruta donde se procesará la creación
        type: 'POST',
        data: datos,
        success: function (response) {
            if (response === "success") {
                Swal.fire({
                    icon: 'success',
                    title: 'Médico registrado',
                    text: 'El médico ha sido registrado correctamente.',
                });
                cargarTablaMedicos(); // Actualiza la tabla
                $("#FormularioRegistroMedico")[0].reset(); // Limpia el formulario
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
}

/**
 * Función para cargar la tabla de médicos desde listar.php.
 */
function cargarTablaMedicos() {
    $.ajax({
        url: 'vistas/medicos/listar.php', // Ruta que devuelve la tabla (AJAX)
        type: 'GET',
        success: function (data) {
            $('#contenidoTablaPersonas').html(data); // Carga el contenido en el div
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
function cargarTablaEspecialidades(){  
    let datos=0;
    $.ajax({
        url:'vistas/especialidades/listar.php',
        type:'POST',
        data: datos,
        success: function(respuesta){            
            document.getElementById("contenidoTablaEspecialidades").innerHTML = respuesta;
        }
    });
}
function registrarEspecialidad(){
    datos = $('#FormularioRegistroEspecialidad').serialize();
    alert(datos);
    console.log(datos);
    $.ajax({
        url: 'controladores/EspecialidadConRegistrar.php',
        type: 'POST',
        data: datos,
        success: function(data) {
            alert(data);
            cargarTablaEspecialidades();
            Swal.fire({
                icon: 'success',
                title: 'Registro exitoso',
                text: 'La especialidad ha sido registrado correctamente.'
            });
        },
        error: function() {
            Swal.fire({
                icon: 'error',
                title: 'Error',
                text: 'No se pudo registrar la especialidad.'
            });
        }
    })
}



