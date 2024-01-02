<?php
    for($i=0; $i<10; $i++) {
        if($i == 3) {
            continue;
        }
        echo "$i <br>";
    }
    echo "<br>out of loop !";
?>