<?php
    $server = "localhost";
    $user = "root";
    $pass = "";
    $db = "crud_test";
    
    // Create connection
    $conn = mysqli_connect($server, $user, $pass, $db);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
?>