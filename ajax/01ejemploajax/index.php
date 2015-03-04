<!DOCTYPE html>
<html  lang="es">
<head>
	<meta charset='utf-8'>
	<title>Primera app ajax</title>
		<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet">
	<link href="//maxcdn.bootstrapcdn.com/bootswatch/3.3.1/flatly/bootstrap.min.css" rel="stylesheet">

<script>
function cargarDoc(){
	var infoAjax;
	infoAjax=new XMLHttpRequest();
	infoAjax.onreadystatechange=function(){
	  if (infoAjax.readyState==4 && infoAjax.status==200){
		document.getElementById("display").innerHTML=infoAjax.responseText;
		}
	}
	infoAjax.open("GET","info.txt",true);
	infoAjax.send();
	
}
setInterval(cargarDoc,5000);
</script>
</head>
<body>

<div class="container">
<div id="miDiv"><h2>Primera app ajax</h2></div>
<div id="miDiv"><h2>Primera app ajax</h2></div>
<button  class='btn btn-primary'type="button" onclick="cargarDoc()">Cambiar Contenido</button>
</div>
<div id="display"></div>

</body>
</html>