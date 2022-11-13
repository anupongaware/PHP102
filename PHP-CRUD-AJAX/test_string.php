<?php
// replace method
$str = "Hello ice kub";
echo  $str . "<br/>";
echo str_replace("kub", "KUB", $str);

echo "<br/>";


// explode method
$data = "foo:*:1023:1000::/home/foo:/bin/sh:";
print_r(explode(":", $data));

echo "<br/>";


// write and read file
$file = file_get_contents('index.php') or die("Unable to open file!");
echo $file;


$myfile = fopen("a.txt", "w");
$txt = "Ice ZA";
fwrite($myfile, $txt);
fclose($myfile);
