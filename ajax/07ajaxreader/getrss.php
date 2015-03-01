<?php
//recogemos el parámetro por url
$q=$_GET["q"];
// crear un documento rss:http://www.desarrolloweb.com/articulos-copyleft/articulo-rss-crear-un-documento.html
//encontramos el feed seleccionado
//http://www.tablondeanuncios.com/rss/menu_feeds.php
if($q=="Google") {
  $xml=("http://news.google.com/news?ned=us&topic=h&output=rss");
} elseif($q=="El_Pais") {
  $xml=("http://ep00.epimg.net/rss/elpais/portada.xml");
}
elseif($q=="tablon_coches") {
  $xml=("http://www.tablondeanuncios.com/rss/rss_xml.php?tablon_b=1");
}

$xmlDoc = new DOMDocument();
$xmlDoc->load($xml);

////obtiene la información del canal "<channel>"
$channel=$xmlDoc->getElementsByTagName('channel')->item(0);
$channel_title = $channel->getElementsByTagName('title')
->item(0)->childNodes->item(0)->nodeValue;
$channel_link = $channel->getElementsByTagName('link')
->item(0)->childNodes->item(0)->nodeValue;
$channel_desc = $channel->getElementsByTagName('description')
->item(0)->childNodes->item(0)->nodeValue;

////muestra la información del canal "<channel>""
?>
<div class="canal">
<h1><a href="<?=$channel_link?>"><?=$channel_title?></a></h1>
<p class='well'><?=$channel_desc?></p>
</div>
<?php
//obtiene los elementos de cada "<item>" 
$x=$xmlDoc->getElementsByTagName('item');
for ($i=0; $i<=2; $i++) {
  $item_title=$x->item($i)->getElementsByTagName('title')
  ->item(0)->childNodes->item(0)->nodeValue;
  $item_link=$x->item($i)->getElementsByTagName('link')
  ->item(0)->childNodes->item(0)->nodeValue;
  $item_desc=$x->item($i)->getElementsByTagName('description')
  ->item(0)->childNodes->item(0)->nodeValue;
  //muestra cada item
  echo ("<p><a href='" . $item_link
  . "'>" . $item_title . "</a>");
  echo ("<br>");
  echo ($item_desc . "</p>");
}
?>