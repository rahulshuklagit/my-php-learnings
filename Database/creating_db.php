//Creating DB, Table, and checking connection

<?php

    $username = "root";
    $password = "";
    $servername = "localhost";
    
// Create connection

    $conn = new mysqli($servername, $username, $password);

// Check connection

    if($conn->connect_error){
        die.("Connection Error: ". $conn->connect_error);
    }
    echo "Connected successfully";
    
// Creating Database
    
    $sql = "CREATE DATABASE myDB";
    if($conn->query($sql)=== TRUE){
    echo "DB created successfully";
    }else "Error creating DB: " .$conn->error;
$conn->close();
?>
    


    