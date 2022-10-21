<?php
$arr_num = array(array(1,2,3), array(4,5,6));

for($i=0; $i<count($arr_num); $i++)
{
    for($j=0; $j<count($arr_num[$i]); $j++)
    {
        echo($arr_num[$i][$j]."<br/>");
    }
}

?>