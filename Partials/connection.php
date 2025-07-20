<?php

    $host = "localhost";
    $database = "qpg";
    $user = "root";
    $password = "";

    $conn = mysqli_connect($host,$user,$password,$database);
    if($conn->connect_error){
        die("Connection Error");
    }
    

?>