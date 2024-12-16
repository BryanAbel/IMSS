<?php
$Nombre = $_POST ["iNombre"];
$Segundonombre = $_POST ["iSegundoNombre"];
$apellidoP = $_POST ["iApellidoPaterno"];
$apellidoM = $_POST ["iApellidoMaterno"];
$Fechanaci = $_POST ["iNacimiento"];
$telparticular = $_POST ["iTelP"];
$telfamiliar = $_POST ["iTelM"];

echo $nombre;

require_once "../modelos/Paciente.php";

RegistrarPacientes($Nombre,$Segundonombre, $apellidoP, $apellidoM, $Fechanaci, $telparticular, $telfamiliar);
?>