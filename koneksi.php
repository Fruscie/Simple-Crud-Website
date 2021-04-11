
<?php
    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "fazztrack";

    $connect = mysqli_connect($host, $username, $password,$database);
    if(!$connect){
      echo "Failed Connect to database : " .mysqli_connect_error(); 
     
    }else{
        // echo "db aman";
    }
?> 
