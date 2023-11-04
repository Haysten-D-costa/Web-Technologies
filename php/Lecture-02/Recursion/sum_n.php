<html>
<body>
    <?php
        function sumN($num) {
            if($num == 1) { 
                return (1); 
            }
            return ($num + sumN($num-1));
        }
        echo "Sum of 5 = ".sumN(5);
        echo "<br> Sum of 6 = ".sumN(6);
    ?>
</body>
</html>