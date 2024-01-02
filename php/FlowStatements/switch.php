<?php
    $flower = "rose";
    switch($flower) {
        case "sunflower" : echo "Sunflower is 10Rs.";
                           break;
        case "rose" : echo "Rose is 20Rs.";
                      break;
        case "lily" : echo "Lily is 15Rs.";
                      break;
        default : echo "No such flowers";
                  break;
    }
    echo "<br>out of switch statement";
?>