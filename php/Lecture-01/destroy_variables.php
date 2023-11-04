<html>
<head>
    <title>Destroy variables in PHP</title>
</head>
<body>
    <?php
        $a = "comp";
        echo "<br> a = ".$a;
        unset($a); // destroying variable....

        echo "<br> a = ".$a; // variable destroyed !
    ?>
<body>
</html>