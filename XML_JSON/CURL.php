<?php
function httpGet($url)
{

    // is cURL installed yet?
    if (!function_exists('curl_init')) {
        die('Sorry cURL is not installed!!');
    }
    // create curl resource
    $ch = curl_init();

    // set url
    curl_setopt($ch, CURLOPT_URL, $url);

    // set a referrer
    curl_setopt($ch, CURLOPT_REFERER, "http://www.example.org/yay.htm");

    // User agent
    curl_setopt($ch, CURLOPT_USERAGENT, "MozillaXYZ/1.0");

    //Include header in result? (0 = yes, 1 = no)
    curl_setopt($ch, CURLOPT_HEADER, 0);

    //return the transfer as a string
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    //return the transfer as a string
    curl_setopt($ch, CURLOPT_TIMEOUT, 10);

    // $output contains the output string
    $output = curl_exec($ch);

    // close curl resource to free up system resources
    curl_close($ch);
    return $output;
}

echo httpGet("http://expert-programming-tutor.com/");
