<?php
    if(isset($_SESSION['counter'])) {
        $_SESSION['counter'] = $_SESSION['counter'] + 1;
    } else {
        $_SESSION['counter'] = 1;
    }
    $msg = "<br>Count of this page visited is : ". $_SESSION['counter'];
?>
<html>
<body>
    <?php
        echo "$msg<br>";
    ?>
</body>
</html>
