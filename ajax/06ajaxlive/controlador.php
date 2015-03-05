<?php
//recogemos la variable por get
$q=$_GET["q"];
//var_dump($q);
//cargamos el documento xml
$xml=simplexml_load_file('links.xml');
//var_dump($xml);
//encuentra coincidencias con los valores xml cuando q>0
if (strlen($q)>0) {
	echo '<ul>';
	foreach($xml->link as $enlaces){
	  $tit=$enlaces->titulo;
	 $url=$enlaces->url;
		if(stristr($tit,$q) ){
			echo "<li><a href='$url'>$tit</a></li>";
			
		}
		
		
	}
	echo '</ul>';
	
}
?>