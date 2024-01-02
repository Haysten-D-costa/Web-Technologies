<html>
<body>
    <?php
        session_start();
        if(isset($_SESSION['username'])) {
            echo "User : ". $_SESSION['username'];
            session_destroy();
            echo "<br>Session Destroyed !";
        } 
        else {
            echo "Setting user name !";
            $_SESSION['username'] = "Haysten D'costa";
        }
    ?>
</body>
</html>