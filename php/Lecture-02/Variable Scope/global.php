<html>
<body>
    <?php
        function value() {
            global $x;
            echo "<br> Value in function = ".$x;
        }
        $x = 50;
        echo "Value in main = ".$x;
        value();

    ?>
</body>
</html>