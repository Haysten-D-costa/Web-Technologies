<?php
    session_start();
    $_SESSION['FIRSTNAME'] = "Haysten";
    $_SESSION['LASTNAME'] = "D'costa";
    unset($_SESSION['LASTNAME']);   // REMOVING SESSION DATA !.......
    
    $msg = "<br>Name is : ". $_SESSION['FIRSTNAME'] ." ". $_SESSION['LASTNAME'];
?>
<html>
<body>
    <?php
        echo "<br>$msg";
    ?>
</body>
</html>