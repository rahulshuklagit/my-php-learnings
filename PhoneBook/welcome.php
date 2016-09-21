<?php 

    ob_start();
    session_start();
    
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "phonebook";

    $conn = mysqli_connect($servername, $username, $password, $dbname);

     if(isset($_SESSION['uname'])){ 
         
        echo "Welcome " .$_SESSION['uname']. "!";
     
     }else{ 
         echo 'Session not set';}


   

    
    
?>