<html>
<style>
    div {
        color: darkgreen;
        font-size: 50px;
    }
</style>
<body>
<?php 

    ob_start();
    session_start();
    
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "phonebook";

    $conn = mysqli_connect($servername, $username, $password, $dbname);

     if(isset($_SESSION['uname'])){ 
         
        echo "Welcome <div>" .$_SESSION['uname']. " !</div>";
     
     }else{ 
         echo 'Session not set';
     }  
?>

</body>
</html>