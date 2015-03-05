<?php
$voto = $_GET['voto'];
//echo $voto;
//obtiene el contenido del archivo de texto
$archivo = "resultado.txt";
$contenido = file($archivo);

//Obtenemos el contenido del primer array del archivo resultado.txt mediante explode
$resultado = explode("||", $contenido[0]);
$si = $resultado[0];
$no = $resultado[1];

if ($voto == 'si') {
  $si = $si + 1;
}
if ($voto == 'no') {
  $no = $no + 1;
}

//insertamos  los datos sobre el alrchivo de texto
$insertvoto = $si."||".$no;
$fp = fopen($archivo,"w");
fwrite($fp,$insertvoto);
fclose($fp);
?>

<h2>Resultado:</h2>
<table class='table'>
	<tr>
		<td>Sí:</td>
		<td>
		<img src="poll.gif"width='<?=(100*round($si/($no+$si),2)); ?>'height='20'>
		<?=(100*round($si/($no+$si),2)); ?>%
		</td>
	</tr>
	<tr>
		<td>No:</td>
		<td>
		<img src="poll.gif" width='<?=(100*round($no/($no+$si),2)); ?>'height='20'>
		<?=(100*round($no/($no+$si),2)); ?>%
		</td>
	</tr>
</table>