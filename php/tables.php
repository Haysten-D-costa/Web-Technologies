<html>
<body>
    <form method="POST" action="">
        <p>Enter a number : </p>
        <input type="text" name="num">    
        <input type="submit" value="SUBMIT" name="submit">
        <?php
            if(isset($_POST['submit'])) {
                $num = $_POST['num'];
                for($i=1; $i<=10; $i++) {
                    echo "<br>". $num ." x ". $i ." = ". ($num * $i);
                }
            }
        ?>
    </form>
</body>
</html>