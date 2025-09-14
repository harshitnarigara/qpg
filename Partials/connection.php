<?php

    $host = "localhost";
    $database = "question_paper_genarator";
    $user = "root";
    $password = "";

    $conn = mysqli_connect($host,$user,$password,$database);
    if($conn->connect_error){
        die("Connection Error");
    }
    
?>