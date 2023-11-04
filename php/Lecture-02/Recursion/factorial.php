<html>
<body>
    <?php
        function factorial($num) {
            if($num == 0) { 
                return (1); 
            }
            return ($num * factorial($num-1));
        }
        echo "Factorial of 5 = ".factorial(5);
        echo "<br> Factorial of 6 = ".factorial(6);
    ?>
</body>
</html>