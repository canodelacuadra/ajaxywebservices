<!DOCTYPE html>
<html  lang="es">
<head>
	<meta charset='utf-8'>
	<title>Primera app ajax</title>
		<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet">
	<link href="//maxcdn.bootstrapcdn.com/bootswatch/3.3.1/flatly/bootstrap.min.css" rel="stylesheet">

<script>
function cargarDoc()
{
var xmlhttp;
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("miDiv").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","info.txt",true);
xmlhttp.send();
}
</script>
</head>
<body>

<div class="container">
<div id="miDiv"><h2>Este texto lo cambiará Ajax</h2></div>
<button  class='btn btn-primary'type="button" onclick="cargarDoc()">Cambiar Contenido</button>
</div>

</body>
</html>