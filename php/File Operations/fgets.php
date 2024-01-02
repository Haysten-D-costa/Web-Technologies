<?php
    $fp = fopen("text.txt", "r") or die("Opening failed !");
    while(!feof($fp)) {
        $data = fgets($fp, 1024);
        echo "$data <br>";
    }
    fclose($fp) or die("Closing failed !");
?>