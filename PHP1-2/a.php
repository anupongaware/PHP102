<?php
$z[0] = "Hello";
$z[1] = "abc";
$z[2] = "xyz";
$z[10] = "pqr";

foreach($z as $key => $value){
    echo(" ".$key.": ".$value);
    echo("<br/>");
}

echo("--------------break----------------");
echo("<br/>");

$arr_num = array(3,4,2,1,7,9);

for($i=0; $i<count($arr_num); $i++)
{
    echo($arr_num[$i]);
    echo"<br/>";
}

?>