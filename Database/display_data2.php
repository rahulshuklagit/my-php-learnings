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

    $sql = "SELECT * FROM MyGuests";
    $result = $conn->query($sql);


    if($result->num_rows>0){
        echo "<table>\n";
        // Output each row data
        
        while($row = $result->fetch_assoc()){
            echo "\t<tr>\n";
                echo "\t\t<td>".$row['firstname']."</td>\n";
                echo "\t\t<td>".$row['lastname']."</td>\n";
                echo "\t\t<td>".$row['email']."</td>\n";
            echo "\t</tr>\n";
            
        }
        echo "</table>\n";
        
    }else{
        echo "0 Results";
    }

    $conn->close();
?>
    


    