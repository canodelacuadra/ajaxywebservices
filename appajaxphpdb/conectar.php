<?php
/** SISTEMA DE FOROS SIMPLE José Antonio Cano **/
/** ESTE SISTEMA DE FOROS ES ÚNICAMENTE para principiantes **/

$db_host = 'localhost'; //Nombre del servidor MySQL, por defecto localhost
$db_user = 'root'; //Usuario de la base de datos
$db_pass = ''; //Contraseña de la base de datos
$db_name = 'biblioteca'; //Nombre de la base de datos
$conexion = mysqli_connect($db_host, $db_user, $db_pass,$db_name);
if (!$conexion) {
    die("Fallo de conexión: " . mysqli_connect_error());
} //Conectamos a la base de datos
mysqli_query($conexion,'SET NAMES "UTF8" ');
//mysqli_set_charset($conexion,'utf8');
?>
