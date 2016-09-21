<h1>Creating DB, Table, and checking connection</h1><br>



<?php

    $username = "root";
    $password = "";
    $servername = "localhost";
    $dbname = "myDB";

//Create connection
    
    $conn = new mysqli($servername, $username, $password, $dbname);

//Check Connection

    if($conn->connect_error){
        echo "Connection to DB failed : " . $conn->connect_error;
    }
    echo "Connected to DB successfully";
    echo "<br><br>";

//Select Statement

    $sql = "SELECT id, firstname, lastname, email FROM MyGuests";
    $result = $conn->query($sql);

    if($result->num_rows>0){
        // Output each row data
        while($row = $result->fetch_assoc()){
        echo "id: " . $row["id"]."<br>". "Name: " . $row["firstname"]. " " . $row["lastname"]."<br>". "Email: " . $row["email"]. "<br>"; 
        }
    }else{
        echo "0 Results";
    }

    $conn->close();
?>
    


    