<!DOCTYPE html>
<html  lang="es">
<head>
	<meta charset='utf-8'>
	<title>Ajax con db</title>
		<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet">
	<link href="//maxcdn.bootstrapcdn.com/bootswatch/3.3.1/flatly/bootstrap.min.css" rel="stylesheet">
<head>
<script>
function mostrarLibro(str) {
    if (str == "") {
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("txtHint").innerHTML = xmlhttp.responseText;
            }
        }
        xmlhttp.open("GET","infolibro.php?q="+str,true);
        xmlhttp.send();
    }
}
</script>
</head>
<body>
<div class=" container">
<h1>Información de libros</h1>
<form>
<select class='form-group' name="libros" onchange="mostrarLibro(this.value)">
  <option value="">Selecciona un libro:</option>
  <option value="1">El Aleph</option>
  <option value="2">Alicia en el pais de las Maravillas</option>
  <option value="3">Aprenda PHP</option>
  <option value="4">Java en 10 minutos</option>
  </select>
</form>

<div id="txtHint"></div>
</div>
</body>
</html>