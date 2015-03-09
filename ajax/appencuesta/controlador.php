<?php
//recogemos variable desde ajax
$voto=$_GET['voto'];
//echo $voto;
//abrimos y leemos el txt
$artxt='resultados.txt';
$linea=file($artxt);
var_dump($linea);
 $linea[0];
 $resultado=explode('||',$linea[0]);
 $votosi=$resultado[0];
 $votono=$resultado[1];
 //sumamos los datos del txt a los  votosi o votos no
 if($voto=='si'){
	$votosi=$votosi+1; 
 }
 if($voto=='no'){
	$votono=$votono+1; 
 }
 $resultados=$votosi.'||'.$votono;
 //escribimos los nuevos valores de voto en el txt
 $fo=fopen($artxt, 'w');
 fwrite($fo,$resultados);
 
 fclose($fo);
 //mostramos los resultados
echo $resultados.'<hr>';

$porsi=round(($votosi/($votosi+$votono))*100);
$porno= round(($votono/($votosi+$votono))*100);
?>
<img src='poll.gif' width='<?=$porsi?>px'heigth='30px'>
<img src='poll.gif' width='<?=$porno?>px'heigth='30px'>
