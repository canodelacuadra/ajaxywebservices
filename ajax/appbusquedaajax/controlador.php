<?php
 $palabra=$_GET['q'];
 $arxml=simplexml_load_file('links.xml');
 //var_dump($arxml);
 //echo $arxml->link[0]->titulo;
 if($palabra!=''){
 	echo "<ul>";
 foreach($arxml->link as $links){
	 
	$titulo= $links->titulo;
	$url= $links->url;
	 if(stristr($titulo,$palabra)){
	echo "<li><a href='$url'>$titulo</a></li>";	 
	 }
 }
 	echo "</ul>";
 }
?>

