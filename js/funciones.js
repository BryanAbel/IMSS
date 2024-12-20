function registrarDoctores(){
    datos = $('#FormularioRegistroMedico').serialize();
    alert(datos);
    console.log(datos);
    $.ajax({
        url: '/Imss/controladores/MedicoConRegistrar.php',
        type: 'POST',
        data: datos,
        success: function(data) {
            alert(data);
            cargarTablaMedicos();
            Swal.fire({
                icon: 'success',
                title: 'Registro exitoso',
                text: 'El medico ha sido registrado correctamente.'
            });
        },
        error: function() {
            Swal.fire({
                icon: 'error',
                title: 'Error',
                text: 'No se pudo registrar la Medico.'
            });
        }
    })
}
function cargarTablaMedicos(){  
    let datos=0;
    $.ajax({
        url:'/Imss/vistas/medicos/listar.php',
        type:'POST',
        data: datos,
        success: function(respuesta){            
            document.getElementById("contenidoTablaPersonas").innerHTML = respuesta;
        }
    });
}
function ModificarMedicos(idMedico){
    $("#btnModal").click();
    $.ajax({
        url:'controladores/MedicoControlerGet.php',
        type:'POST',
        data: {
                "idMedico" : idMedico
            },
        success: function(respuesta){            
            document.getElementById("resultadoModificacion").innerHTML = respuesta;
        }
    });
}
function ModiMEdicos(){
    datos = $('#formularioModificacionEspecialidad').serialize();
    $.ajax({
        url: '/Imss/controladores/MedicoControlerModificar.php',
        type: 'POST',
        data: datos,

        success: function(data){            
            console.log(datos);
            cargarTablaMedicos();
            alert("Modificacion editosa");
        }
    });
}

function cargarTablaEspecialidades(){  
    let datos=0;
    $.ajax({
        url:'/Imss/vistas/especialidades/listar.php',
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
        url: '/Imss/controladores/EspecialidadConRegistrar.php',
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
function ModificarEspecialidad(idEspecialidad){
    $("#btnModal").click();
    $.ajax({
        url:'controladores/EspecialidadControlerGet.php',
        type:'POST',
        data: {
                "idEspecialidad" : idEspecialidad
            },
        success: function(respuesta){            
            document.getElementById("resultadoModificacion").innerHTML = respuesta;
        }
    });
}
function ModiEspecialidad(){
    datos = $('#formularioModificacionEspecialidad').serialize();
    $.ajax({
        url: '/Imss/controladores/EspecialidadControlerModificar.php',
        type: 'POST',
        data: datos,

        success: function(data){            
            console.log(datos);
            cargarTablaEspecialidades();
            alert("Modificacion editosa");
        }
    });
}
function EliminarEspecialidad(idRegistro){
    $.ajax({
        url: '/Imss/controladores/EspecialidadControlerEliminar.php',
        type: 'POST',
        data: {
            "idEspecialidad" : idRegistro
        },
        success: function(data){
            cargarTablaEspecialidades();
            alert("Datos Eliminados");
        }
    });
    
}function cargarEspecialidadesCombo() {
    $.ajax({
        url: '/Imss/vistas/medicos/crear.php', // Ruta correcta al archivo PHP en la carpeta de médicos
        type: 'GET',
        success: function (respuesta) {
            // Insertar las opciones en el combo box
            $('#comboEspecialidades').html(respuesta); 
        },
        error: function () {
            Swal.fire({
                icon: 'error',
                title: 'Error',
                text: 'No se pudieron cargar las especialidades.'
            });
        }
    });
}

  





//registrar pacientes
function registrarPaciente(){
    datos = $('#FormularioRegistroPaciente').serialize();
    alert(datos);
    console.log(datos);
    $.ajax({
        url: '/Imss/controladores/pacientecontrolerRegistro.php',
        type: 'POST',
        data: datos,
        success: function(data) {
            alert(data);
            cargarTablapaciente();
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

//cargar tabla pacientes
function cargarTablapaciente(){  
    let datos=0;
    $.ajax({
        url:'/Imss/vistas/pacientes/listar.php',
        type:'POST',
        data: datos,
        success: function(respuesta){            
            document.getElementById("contenidoTablaPacientes").innerHTML = respuesta;
        }
    });
}

//modificar pacientes
function modificarP(idPacientes){
    $("#btnModal").click();
    $.ajax({
        url:'controladores/PacientesControlerGet.php',
        type:'POST',
        data: {
                "idPacientes" : idPacientes
            },
        success: function(respuesta){            
            document.getElementById("resultadoModificacion").innerHTML = respuesta;
        }
    });
}
function ModiPacientes(){
    datos = $('#formularioModificacionPacientes').serialize();
    $.ajax({
        url: '/Imss/controladores/PacienteControlerModificar.php',
        type: 'POST',
        data: datos,

        success: function(data){            
            console.log(datos);
            cargarTablaPaciente();
            alert("Modificacion editosa");
        }
    });
}
//eliminar paciente
function EliminarP(idRegistro){
    $.ajax({
        url: '/Imss/controladores/PacienteControlerEliminar.php',
        type: 'POST',
        data: {
            "idpaciente": idRegistro
        },
        success: function(data){
            cargarTablaPaciente();
            alert("Datos Eliminados");
        }
    });
    
}