<?php

    $db_server = "localhost";
    $db_user = "root";
    $db_pass = "";
    $db_name = "businessdbb";
    $conn = "";

    $conn = mysqli_connect($db_server, 
                           $db_user, 
                           $db_pass, 
                           $db_name);

    if($conn){
        header("Connection successfull");
    }
    else{
        echo"Could not connect!";
    }
?> 