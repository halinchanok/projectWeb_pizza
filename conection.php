<?php
$host = '';
$user = '';
$pass = '';
$db = '';
$conn = mysql_connect($host, $user, $pass, $db);

if($conn){
    echo "Conection successful";
}else{
    echo "Connection error";
}