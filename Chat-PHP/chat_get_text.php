<?php
    $filename = "chat.txt";
    $content = file_get_contents($filename);
    $message = explode("\n",$content);
    
    $json = json_encode($message);
    echo $json;    
?>