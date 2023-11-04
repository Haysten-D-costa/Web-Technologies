<html>
<head>
    <title>Assign by Reference in PHP</title>
</head>
<body>
    <?php
        $a = "comp";
        $b = &$a; // assigning 'a' to 'b' by reference....
        echo "<br> $a";
        echo "<br> $b";

        $b = "mech";
        echo "<br> $a";
        echo "<br> $b";
    ?>
<body>
</html>