<?php
    $conn = mysqli_connect("localhost", "root", "", "college");
    
    if($conn) { echo "<br> Successful Connection !"; }
    else {
        echo "<br> Failed Connection !";
        exit();
    }
    $query = "
        INSERT INTO student (student_ID, student_Name, student_Branch)
        VALUES
        ('56', 'Haysten', 'Computer'),
        ('35', 'Shabi', 'Electronics'),
        ('24', 'Rosario', 'Mechanical');
    ";
    $r = mysqli_query($conn, $query);
    if($r) { echo "<br> Table created successfully !"; }
    else {
        echo "<br> Table creation failed !";
        exit();
    }
    mysqli_close($conn);
?>