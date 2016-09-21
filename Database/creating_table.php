//Creating DB, Table, and checking connection

<?php

    $username = "root";
    $password = "";
    $servername = "localhost";
    $dbname = "myDB";

//Create Connection

    $conn = new mysqli($servername, $username, $password, $dbname);
    
//Check Connection

    if($conn->connect_error){
        die("Connection failed: " .$conn->connect_error);        
    }

//Create Table

    $sql = "CREATE TABLE MyGuests (
    id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY, firstname VARCHAR(30) NOT NULL, lastname VARCHAR(30) NOT NULL, email VARCHAR(50), reg_date TIMESTAMP)";

    if($conn->query($sql)===TRUE){
        echo "Table MyGuest created successfully";
    }else{ 
        echo "Error manufactuting table: " . $conn->error;
    }

    $conn->close();    

?>
    


    