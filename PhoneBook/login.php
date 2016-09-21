<?php

    ob_start();
    session_start();

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "phonebook";

$conn = mysqli_connect($servername, $username, $password, $dbname);

    $uname = $_POST['uname'];
    $pass = $_POST['pass'];

    $sql = "SELECT * FROM creds WHERE uname = '$uname' AND pass ='".md5($pass)."'";

    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
  //  $active = $row['active'];
    $count = mysqli_num_rows($result);

// If result matched $myusername and $mypassword, table row must be 1 row

    if($count ==1){
        $_SESSION['uname']= $row['uname'];
        
        header("location: welcome.php");
    }else {
        echo "Your credentials are invalid";
    }
    
    

?>