<?php
require 'connection.php'; //เชื่อมต่อกับไฟล์ connection.php

session_start(); //ใช้ sesstion

$_session['order_name'] = $_post['order_name'];
header('Location: page2.html');
exit;

// page2
if($server["Request_method"] == "post"){
    $_session['order_size'] = $_post['order_size'];
    $_session['order_crust'] = $_post['order_crust'];
    $_session['order_ham'] = $_post['order_ham'];
    $_session['order_chress'] = $_post['order_chress'];
    $_session['order_peperoni'] = $_post['order_peperoni'];
}



if(isset($_post["submit"])){
    // ตรวจสอบว่ามีข้อมูลที่จะใส่ใน DB ไหม และใส่ข้อมูลไปเก็บไว้
    if(!empty($_session['order_name']) && !empty($_session['order_size']) && !empty($_session['order_crust'])){
        $order_name = $_session['order_name'];
        $order_size = $_session['order_size'];
        $order_crust = $_session["order_crust"];
        $order_ham = $_session['order_ham'];
        $order_chress = $_session['order_chress'];
        $order_peperoni = $_session['order_peperoni'];
    }else{
        echo "Please choose to use all of them.";
    }
}
echo $_session['order_name'];


$conn->close();
?>