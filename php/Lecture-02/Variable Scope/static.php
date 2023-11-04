<html>
<body>
    <?php
        function value() {
            static $x = 0; // initialization happens only once....
            $x = $x + 1;   // increments and returns the value each time it is called !
            return $x;
        }
        $a = value();
        echo "Value of a = ".$a;
        $b = value();
        echo "<br> Value of b = ".$b;
    ?>
</body>
</html>