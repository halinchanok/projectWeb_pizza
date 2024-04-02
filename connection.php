<?php
    $host='localhost';
    $user='root';
    $pass=''; 
    $db='pizzastore'; 
    $conn= mysqli_connect($host,$user,$pass,$db); //เชื่อมต่อ serrver database

if($conn)
    { echo "Connection successful";}
else 
    { echo "Connection error";}
?>