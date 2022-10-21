<?php

$z[0] = "1";
$z[2] = "4";
$z[1] = "2";
$z[3] = "4";


for($i=0; $i<count($z); $i++)
{
    echo($z[$i]."<br/>");
}

echo("<----------------- Break -------------->");
echo("<br/>");

foreach($z as $t)
{
    echo $t."<br/>";
}


?>