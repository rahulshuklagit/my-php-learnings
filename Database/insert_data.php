//Creating DB, Table, and checking connection

<?php

    $username = "root";
    $password = "";
    $servername = "localhost";
    $dbname = "myDB";

//Create connection

    $conn = new mysqli($servername, $username, $password, $dbname);

//Check connection

    if($conn->connect_error){
        die("Connection to DB failed: " . $conn->connect_error);
    }

//Insert Data

    $sql = "INSERT INTO myGuests( firstname, lastname, email ) VALUES ('Jon', 'Snow', 'Jon.snow@got.com')";


    if($conn->query($sql)=== TRUE){
        echo "New record inserted successfully";
    }else{
        echo "Data insertion failed: " . $conn->error;
    }

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
    


    