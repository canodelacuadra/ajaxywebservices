<!DOCTYPE html>
<html  lang="es">
<head>
	<meta charset='utf-8'>
	<title><?php echo str_replace('_',' ',basename(getcwd())); ?></title>
	<meta charset="utf-8" >
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet">
	<link href="//maxcdn.bootstrapcdn.com/bootswatch/3.3.1/superhero/bootstrap.min.css" rel="stylesheet">
</head>
<div class="container">
<body>.
<?php
echo "<h1>".str_replace('_',' ',basename(getcwd()))."</h1>";
?>
<h2><span class="glyphicon glyphicon-th-list " aria-hidden="true"></span> Índice</h2>
<?php
	$path="./";
	$directorio=dir($path);
	
	echo'<ul class="list-group">';
	while ($archivo = $directorio->read()){
		if(($archivo!=='index.php')&&($archivo!=='.')&&($archivo!=='..')){
		echo'<li class="list-group-item"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span> ';
		echo '<a href='.$archivo.'/>'.str_replace('_',' ',$archivo).'</a>'."<br>";
		echo'</li>';
		}
	}
	$directorio->close();
	echo'</ul>';	
?>
<hr>
<footer>

&copy; <a href="https://github.com/canodelacuadra">@canodelacuadra</a> - <?php echo date("Y");?>	
</footer>	
</div>
</body>
</html>
