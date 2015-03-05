<?php
$genero= $_GET['q'];
$arxml='libros.xml';
$obxml=simplexml_load_file($arxml); 
?>
<table class='table'>
<tr><th>Titulo</th><th>Autor</th><th>sinopsis</th></tr>

<?php

foreach($obxml->libro/*[$genero]*/as $libroxml){
	if($libroxml['categoria']==$genero){
	?>
<tr><td><?=$libroxml->titulo?></td><td><?=$libroxml->autor?></td><td><?=$libroxml->sinopsis?></td></tr>	
	<?php	
	}
	}
?>
</table>
<?php

?>