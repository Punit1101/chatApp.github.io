<?php
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $dbname = "chatapp";

    $conn = mysqli_connect($hostname, $username, $password, $dbname);

    if(!$conn){
        echo "data connection error ".mysqli_connect_error();
    }else{
        // echo "database connected";
    }


?>