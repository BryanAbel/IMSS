<?php

$host = 'localhost'; 
$db   = 'ims2'; 
$user = 'root'; 
$pass = ''; 
$charset = 'utf8mb4';//ME PERMITE INGRESAR A LA DB CARACTERES ESPECIALES COMO
//ACENTOS

//BLOQUE TRY PARA PODER CAPTURAR EXCEPCIONES
try{
    $pdo = new PDO("mysql:host=$host;dbname=$db;charset=$charset", $user, $pass);
    //echo "Conexión exitosa a la base de datos.";
    //ESTA LÍNEA ME PERMITE QUE LOS QUERYS ME MUESTREN LOS ERRORES
    //POR EJEMPLO CUANDO INGRESO MAL EL NOMBRE DE UNA COLUMNA QUE NO EXISTE
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}catch (PDOException $e) {
    //SI HAY ERRORES EN LA CONEXIÓN AUTOMATICAMENTE SE CORTA EL FLUJO DEL PROGRAMA
    die("Error de conexión: " . $e->getMessage());
}

?>
