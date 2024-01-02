<?php
    function increment_num() {
        static $x = 0; // initialized only once (retains its value, between function calls)....
        $x++;
        return $x;
    }
    echo "<br>Number : ".increment_num();
    echo "<br>Number : ".increment_num();
    echo "<br>Number : ".increment_num();
?>