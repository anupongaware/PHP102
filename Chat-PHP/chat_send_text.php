<?php
    $username = isset($_POST['username']) ? $_POST['username'] : "";
    $text = $_POST['text'];
    file_put_contents("chat.txt", $username." : ".$text."\n", FILE_APPEND);

?>