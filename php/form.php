<html>
<body>
    <form method="POST" action="">
        <label for="f-name">First Name : </label>
        <input type="text" id="f-name" name="f-name"><br><br>
        <label for="l-name">Last Name : </label>
        <input type="text" id="l-name" name="l-name"><br><br>
        <label for="age">Age : </label>
        <input type="number" id="age" name="age"><br><br>
        <input type="submit" id="submit" name="submit" value="SUBMIT">
    </form>
    <?php
        if(isset($_POST['submit'])) {
            $fname = $_POST['f-name'];
            $lname = $_POST['l-name'];
            $age  = $_POST['age'];

            $conn = mysqli_connect("localhost", "root", "", "nameage");
            if($conn) {
                $query = "INSERT INTO student (fname, lname, age) VALUES ('$fname', '$lname', '$age')";
                $r = mysqli_query($conn, $query);
                if($r) {
                    echo "INSERTED !";
                } else {
                    echo "Failed !";
                }
            } else {
                echo "Failed !";
            }
        }
    ?>
</body>
</html>