<?php
$xmlstr = <<<XML
<?xml version='1.0' standalone='yes'?>
<movies>
 <movie>
  <title>PHP: Behind the Parser</title>
  <characters>
   <character>
    <name>Ms. Coder</name>
    <actor>Onlivia Actora</actor>
   </character>
   <character>
    <name>Mr. Coder</name>
    <actor>El Act&#211;r</actor>
   </character>
  </characters>
  <plot>
   So, this language. It's like, a programming language. Or is it a
   scripting language? All is revealed in this thrilling horror spoof
   of a documentary.
  </plot>
  <great-lines>
   <line>PHP solves all my web problems</line>
  </great-lines>
  <rating type="thumbs">7</rating>
  <rating type="stars">5</rating>
 </movie>
 <movie title="Transformers">
    <plot>
        Hello world my name is kala.
    </plot>
   <type>Anime, Science Fiction</type>
   <format>DVD</format>
   <year>1989</year>
   <rating>R</rating>
   <stars>8</stars>
   <description>A schientific fiction</description>
</movie>
</movies>
XML;

printf($xmlstr);
echo "<br/>";
echo "<br/>";

$movies = new SimpleXMLElement($xmlstr);
echo "<br/>";
echo "<br/>";
echo $movies->movie[0]->plot;
echo "<br/>";
echo "<br/>";
echo $movies->movie[1]->plot;


echo "<br/>";
echo "<br/>";
$xmlDoc = new DOMDocument();
$xmlDoc->loadXML($xmlstr);

$x = $xmlDoc->documentElement;
foreach ($x->childNodes as $item) {
    print $item->nodeName . " = " . $item->nodeValue . "<br>";
    if ($item->childNodes && $item->childNodes != null && $item->childNodes != "") {
        foreach ($item->childNodes as $item_inner) {
            print $item_inner->nodeName . "=" . $item_inner->nodeValue . "<br>";
        }
    }
}
echo "<br/>";
echo "<br/>";
