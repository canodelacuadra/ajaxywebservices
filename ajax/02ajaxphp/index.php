<!DOCTYPE html>
<html  lang="es">
<head>
	<meta charset='utf-8'>
	<title>Primera app ajax</title>
		<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet">
	<link href="//maxcdn.bootstrapcdn.com/bootswatch/3.3.1/flatly/bootstrap.min.css" rel="stylesheet">

<script>
function mostrarSugerencias(str) {
    if (str.length == 0) { 
        document.getElementById("textoIndirecto").innerHTML = "";
        return;
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("textoIndirecto").innerHTML = xmlhttp.responseText;
            }
        }
        xmlhttp.open("GET", "irsugerencias.php?q=" + str, true);
        xmlhttp.send();
    }
}
</script>
</head>
<body>
<div class="container">
<h1>Primera app con AJAX</h1>
<p>Empieza a escribir un nombre en el campo inferior:</p>
<form class=''> 
<div class="form-group">
<label>Nombre: </label>
<input type="text" onkeyup="mostrarSugerencias(this.value)"></div>
</form>
<p class='well'>Sugerimos: <span id="textoIndirecto"></span></p>
</div>
</body>
</html>