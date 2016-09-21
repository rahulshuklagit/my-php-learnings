<?php
    
    $servername = "localhost";
    $username = "root";
    $password = "12345";
    $dbname = "phonebook";

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    $uname = $_POST['uname'];
    $pass = $_POST['pass1'];
    $pass2 = $_POST['pass2'];

    $sql2 = mysqli_query($conn, "SELECT * FROM creds WHERE uname = '$uname'");

    if(mysqli_num_rows($sql2) > 0){
        
        echo "User already exists.";
        
        exit();
    }else if($pass == $pass2){ 
         
    $pass = md5($pass); 
    
    $sql = "INSERT INTO creds (uname, pass) VALUES ('$uname', '$pass')";

    $result = mysqli_query($conn,$sql);
         
    include('authenticate.php');
    
    }else{
        
        echo "Passwords do not match.";
    }

    
?>
