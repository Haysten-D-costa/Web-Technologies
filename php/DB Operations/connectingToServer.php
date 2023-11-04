<?php
    /* 
    IMP. FUNCTIONS : 
        mysqli_connect("<server>", "<userName>", "<password>", "<dataBase>");
        mysqli_query($conn, $query);
        mysqli_close($conn);
    */
    $conn = mysqli_connect("localhost", "root", ""); // establishing a connection string....
    
    // checking if connection is established....
    if($conn) { echo "Successful Connection !"; }
    else {
        echo "Failed Connection !";
        exit(); // exit if connection failed....
    }
    mysqli_close($conn); // closing connection....
?>