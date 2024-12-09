<?php

class Coneccion
{
    private static $conexion;

    // Método para obtener la conexión a la base de datos
    public static function getConexion()
    {
        if (self::$conexion == null) {
            // Definir parámetros de conexión a la base de datos
            $servidor = "localhost";   // o la IP del servidor de base de datos
            $usuario = "root";         // tu usuario de la base de datos
            $contrasena = "";          // tu contraseña de la base de datos
            $nombreBaseDeDatos = "nombre_de_base_de_datos"; // nombre de tu base de datos

            // Crear la conexión
            self::$conexion = new mysqli($servidor, $usuario, $contrasena, $nombreBaseDeDatos);

            // Comprobar si la conexión fue exitosa
            if (self::$conexion->connect_error) {
                die("Conexión fallida: " . self::$conexion->connect_error);
            }
        }

        return self::$conexion;
    }

    // Método para cerrar la conexión a la base de datos
    public static function cerrarConexion()
    {
        if (self::$conexion != null) {
            self::$conexion->close();
        }
    }
}
?>
