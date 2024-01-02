<?php
    $fp = fopen("text.txt", "r") or die("File open uncessful !");
    echo "<br>File opened successfully !";
    fclose($fp) or die("File close failed !");
    echo "<br>File closed successfully !";
?>