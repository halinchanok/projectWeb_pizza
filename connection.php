<?php
    $host='localhost';
    $user='root';
    $pass=''; 
    $db='pizzastore'; 
    $conn= mysqli_connect($host,$user,$pass,$db); //เชื่อมต่อ serrver database

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        if(isset($_POST['stock_pep'])){
            $_SESSION['stock_pep'] = $_POST['stock_pep']; // เก็บค่าที่เลือกใน session
        }
        if(isset($_POST['stock_ham'])){
            $_SESSION['stock_ham'] = $_POST['stock_ham']; // เก็บค่าที่เลือกใน session
        }
        if(isset($_POST['stock_cheese'])){
            $_SESSION['stock_cheese'] = $_POST['stock_cheese']; // เก็บค่าที่เลือกใน session
        }
    }

// if($conn)
//     { echo "Connection successful";}
// else 
//     { echo "Connection error";}
?>