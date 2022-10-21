<?php
$x = array("x", "a", "c", "d");
for($i=0; $i<count($x);$i++)
{
    echo($x[$i]."<br/>");
}


echo("<---------- Break --------------->"."<br/>");

rsort($x);

foreach($x as $s)
{
    echo($s."<br/>");
}

?>