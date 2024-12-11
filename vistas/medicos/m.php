<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SweetAlert2 Demo</title>
    <!-- CDN de SweetAlert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- Estilos opcionales (puedes añadir más estilos si los necesitas) -->
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
    </style>
</head>
<body>
    <h1>Ejemplo básico de SweetAlert2</h1>
    <button id="mostrarAlerta" class="btn">Mostrar Alerta</button>

    <!-- Script con funcionalidad -->
    <script>
        // Seleccionar el botón
        const boton = document.getElementById('mostrarAlerta');

        // Agregar evento de clic
        boton.addEventListener('click', () => {
            Swal.fire({
                title: '¡Hola!',
                text: 'Esta es una alerta básica con SweetAlert2',
                icon: 'success',
                confirmButtonText: 'Aceptar'
            });
        });
    </script>
</body>
</html>
