<?php
    function increment_num($x) {
        global $x;
        $x++;
    }
    $x = 5;
    echo "<br>Number is : $x";
    increment_num($x);
    echo "<br>Number is : $x";
?>