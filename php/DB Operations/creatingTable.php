<?php
    $conn = mysqli_connect("localhost", "root", "", "college");
    
    if($conn) { echo "<br> Successful Connection !"; }
    else {
        echo "<br> Failed Connection !";
        exit();
    }
    $query = "
        CREATE TABLE student
        (   student_ID int(3) PRIMARY KEY,
            student_Name varchar(20) NOT NULL,
            student_Branch varchar(10)
        );  
    ";
    $r1 = mysqli_query($conn, $query);
    if($r1) { echo "<br> Table created successfully !"; }
    else {
        echo "<br> Table creation failed !";
        exit();
    }
    mysqli_close($conn);
?>