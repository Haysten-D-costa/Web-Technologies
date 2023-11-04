<html>
<body>
    <?php
        function f1() {
            echo "<br> Funciton f1() called !";
        }
        function f2() {
            echo "<br> Function f2() called !";
        }
        function callBackDemo($a, $b) {
            echo "<br> Function callBackDemo called ! ";
            $a(); // calls the function with same name as the parameter passed to '$a'....
            $b(); // .....
        }
        callBackDemo("f1", "f2");
    ?>
</body>
</html>