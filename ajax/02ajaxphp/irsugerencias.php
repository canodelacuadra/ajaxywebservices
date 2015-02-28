<?php
// Array con nombres
$a[] = "Eva";
$a[] = "Cristina";
$a[] = "Álvaro";
$a[] = "Javier";
$a[] = "Verónica";
$a[] = "Ángela";
$a[] = "Rosa";
$a[] = "César";
$a[] = "Ismael";
$a[] = "Juan Carlos";
$a[] = "David";
$a[] = "José";
$a[] = "José Antonio";
$a[] = "Rosa María";
$a[] = "José Luis";
$a[] = "Juan";
$a[] = "Juan Luis";
$a[] = "Alberto";
$a[] = "Roberto";
$a[] = "Eva María";
$a[] = "Sandra";
$a[] = "Sonia";
$a[] = "Antonio";
$a[] = "Antonia";
$a[] = "Justo";
$a[] = "Pedro";
$a[] = "María José";
$a[] = "Mario";
$a[] = "Vicky";
$a[] = "Yolanda";

// crear variable con parámetro para buscar mediante url
$q = $_REQUEST["q"];

$sugerencia = "";

// mostrar todas las  sugerencias desde el  array si $q es diferente de "" 
if ($q !== "") {
    $q = strtolower($q);
    $len=strlen($q);
    foreach($a as $nombre) {
        if (stristr($q, substr($nombre, 0, $len))) {
            if ($sugerencia === "") {
                $sugerencia = $nombre;
            } else {
                $sugerencia .= ", $nombre";
            }
        }
    }
}

// Salida "no sugerencias"si no hemos encontrado sugerencias a las letras indicadas 
echo $sugerencia === "" ? "no sugerencias" : $sugerencia;
?>