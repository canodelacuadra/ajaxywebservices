<!DOCTYPE html>
<html  lang="es">
<head>
	<meta charset='utf-8'>
	<title>Ajax con db</title>
		<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet">
	<link href="//maxcdn.bootstrapcdn.com/bootswatch/3.3.1/flatly/bootstrap.min.css" rel="stylesheet">

<html>
<head>
<body>

<div class="container">

<?php
$q = intval($_GET['q']);

$con = mysqli_connect('localhost','root','','biblioteca');
if (!$con) {
    die('No hemos podido conectarnos: ' . mysqli_error($con));
}

$sql="SELECT * FROM libros WHERE codigo = '".$q."'";
$result = mysqli_query($con,$sql);

echo "<table class='table'>
<tr>
<th>titulo</th>
<th>autor</th>
<th>Editorial</th>
<th>Precio</th>
<th>Numero de ejemplares</th>
</tr>";
while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row['titulo'] . "</td>";
    echo "<td>" . $row['autor'] . "</td>";
    echo "<td>" . $row['editorial'] . "</td>";
    echo "<td>" . $row['precio'] . "</td>";
    echo "<td>" . $row['num_ejemplares'] . "</td>";
    echo "</tr>";
}
echo "</table>";
mysqli_close($con);
?></div>
</body>
</html>