<?php
include 'conectar.php';
$genero= $_GET['q'];
$sql="SELECT * from libros where genero='$genero'";
$resultado=mysqli_query($conexion,$sql);
?>
	<table class='table'>
		<tr><th>Titulo</th><th>Autor</th><th>Editorial</th></tr>
	<?php
while($fila=mysqli_fetch_assoc($resultado)){
	?>
	<tr><td><?=$fila['titulo']?></td><td><?=$fila['autor']?></td><td><?=$fila['editorial']?></td></tr>
	
	<?php
}

?>
	</table>
	
	<?php





?>