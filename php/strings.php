<?php
    $a = "Hd@#$%"; // string literal is parsed (values of variables are printed with specified string)....
    $b = 'Hd@#$%'; // string literal is not parsed (o/p is printed as you typed them)....

    echo "<br>". $a;
    echo "<br>". $b;
?>