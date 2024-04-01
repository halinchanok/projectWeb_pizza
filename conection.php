<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'pizza_store';
$conn = mysql_connect($host, $user, $pass, $db);

if($conn){
    echo "Conection successful";
}else{
    echo "Connection error";
}