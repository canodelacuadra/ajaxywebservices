<?php
$voto = $_REQUEST['voto'];

//obtiene el contenido del archivo de texto
$nombreArchivo = "poll_result.txt";
$contenido = file($nombreArchivo);

//colocamos el cotenido en un array
$array = explode("||", $contenido[0]);
$si = $array[0];
$no = $array[1];

if ($voto == 0) {
  $si = $si + 1;
}
if ($voto == 1) {
  $no = $no + 1;
}

//inserta el contenido en un archivo de texto
$insertvoto = $si."||".$no;
$fp = fopen($nombreArchivo,"w");
fputs($fp,$insertvoto);
fclose($fp);
?>

<h2>Resultado:</h2>
<table class='table'>
<tr>
<td>Sí:</td>
<td>
<img src="poll.gif"
width='<?php echo(100*round($si/($no+$si),2)); ?>'height='20'>
<?php echo(100*round($si/($no+$si),2)); ?>%
</td>
</tr>
<tr>
<td>No:</td>
<td>
<img src="poll.gif" width='<?php echo(100*round($no/($no+$si),2)); ?>'
height='20'>
<?php echo(100*round($no/($no+$si),2)); ?>%
</td>
</tr>
</table>