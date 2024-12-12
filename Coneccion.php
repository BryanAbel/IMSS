<?php

class Coneccion
{
    private static $conexion;

    // Método para obtener la conexión a la base de datos
    public static function getConexion()
    {
        if (self::$conexion == null) {
            // Definir parámetros de conexión a la base de datos
            $servidor = "localhost";   // Dirección del servidor de base de datos
            $usuario = "root";         // Usuario de la base de datos
            $contrasena = "";          // Contraseña de la base de datos
            $nombreBaseDeDatos = "imss"; // Nombre de la base de datos

            // Crear la conexión
            self::$conexion = new mysqli($servidor, $usuario, $contrasena, $nombreBaseDeDatos);

            // Comprobar si la conexión fue exitosa
            if (self::$conexion->connect_error) {
                die("Conexión fallida: " . self::$conexion->connect_error);
            }

            // Configurar el juego de caracteres (UTF-8)
            self::$conexion->set_charset("utf8");
        }

        return self::$conexion;
    }

    // Método para cerrar la conexión a la base de datos
    public static function cerrarConexion()
    {
        if (self::$conexion != null) {
            self::$conexion->close();
            self::$conexion = null;
        }
    }
}
?>
