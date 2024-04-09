<?php
    require 'connection.php';
    session_start();

    // เปลี่ยนภาษา
    if(isset($_GET['lang'])) {
        // เซ็ตค่าภาษาใน session
        $_SESSION['language'] = $_GET['lang'];
    }
    if(isset($_SESSION['language'])){
        if($_SESSION['language'] == 'th'){
            require 'lang_th.php';
        }else if($_SESSION['language'] == 'en'){
            require 'lang_en.php';
        }
    }
    
    // if(isset($_POST["submit"])){
        $sql = "SELECT * FROM orderpizza";
        $result = $conn->query($sql);
        $order_id = ($result->num_rows) + 1;
        $order_item = 1;
        $order_price = $_SESSION['order_1']['sum_price'];
        echo $order_id;
        // เอาข้อมูลเข้าตาราง orders
        $query = "INSERT INTO orders VALUES ('$order_id', '$order_item', '$order_price')";
        mysqli_query($conn, $query);

        $sql = "SELECT * FROM menu";
        $result = $conn->query($sql);
        if(isset($_SESSION['order_1']['size']) == true){
            if(strcmp($_SESSION['order_1']['menu'], "CHEESE PIZZA") == 0){
                $menu_id = 'M01';
                $update_sql = "UPDATE menu SET menu_stock = menu_stock - 1 WHERE menu_id = 'M01'";
                $conn->query($update_sql);
            }else if($_SESSION['order_1']['menu'] == "DOUBLE PEPPERONI"){
                $menu_id = 'M02';
                $update_sql = "UPDATE menu SET menu_stock = menu_stock - 1 WHERE menu_id = 'M02'";
                $conn->query($update_sql);
            }else if($_SESSION['order_1']['menu'] == "HAM&CRAB STICKS"){
                $menu_id = 'M03';
                $update_sql = "UPDATE menu SET menu_stock = menu_stock - 1 WHERE menu_id = 'M02'";
                $conn->query($update_sql);
            }else if($_SESSION['order_1']['menu'] == "MEAT DELUXE"){
                $menu_id = 'M04';
                $update_sql = "UPDATE menu SET menu_stock = menu_stock - 1 WHERE menu_id = 'M04'";
                $conn->query($update_sql);
            }else if($_SESSION['order_1']['menu'] == "TOM YUM KUNG"){
                $menu_id = 'M05';
                $update_sql = "UPDATE menu SET menu_stock = menu_stock - 1 WHERE menu_id = 'M05'";
                $conn->query($update_sql);
            }else if($_SESSION['order_1']['menu'] == "SEAFOOD DELUXE"){
                $menu_id = 'M06';
                $update_sql = "UPDATE menu SET menu_stock = menu_stock - 1 WHERE menu_id = 'M06'";
                $conn->query($update_sql);
            }

            $sql = "SELECT * FROM size";
            $result = $conn->query($sql);
            $size = $_SESSION['order_1']['size'];
            if($size == 'S'){
                $update_sql = "UPDATE size SET size_stock = size_stock - 1 WHERE size = 'S'";
                $conn->query($update_sql);
            }else if($size == 'M'){
                $update_sql = "UPDATE size SET size_stock = size_stock - 1 WHERE size = 'M'";
                $conn->query($update_sql);
            }else{
                $update_sql = "UPDATE size SET size_stock = size_stock - 1 WHERE size = 'L'";
                $conn->query($update_sql);
            }
            

            $sql = "SELECT * FROM topping";
            $result = $conn->query($sql);
            if($_SESSION['order_1']['topping'] == 'cheese'){
                $topping_id = 'T01';
                $update_sql = "UPDATE topping SET topping_stock = topping_stock - 1 WHERE topping_id = 'T01'";
                $conn->query($update_sql);
            }if($_SESSION['order_1']['topping'] == 'ham'){
                $topping_id = 'T02';
                $update_sql = "UPDATE topping SET topping_stock = topping_stock - 1 WHERE topping_id = 'T02'";
                $conn->query($update_sql);
            }else{
                $topping_id = 'T03';
                $update_sql = "UPDATE topping SET topping_stock = topping_stock - 1 WHERE topping_id = 'T03'";
                $conn->query($update_sql);
            }
            
            if($_SESSION['order_1']['crust'] == 'Pan Crust'){
                $crust_id = 'C01';
            }if($_SESSION['order_1']['crust'] == 'Crispy Thin'){
                $crust_id = 'C02';
            }if($_SESSION['order_1']['crust'] == 'Cheese Crust'){
                $crust_id = 'C03';
            }else $crust_id = 'C04';

            $summary = $_SESSION['order_1']['sum_price'];
            $status = "unpay";
            echo $order_id." ".$menu_id." ".$size." ".$crust_id." ".$topping_id." ".$summary." ".$status;
            $query1 = "INSERT INTO orderpizza VALUES ('$order_id', '$menu_id', '$size', '$crust_id', '$topping_id', '$summary', '$status')";
            mysqli_query($conn, $query1);
        }

        if(isset($_SESSION['order_2']['size']) == true){
            if(strcmp($_SESSION['order_2']['menu'], "CHEESE PIZZA") == 0){
                $menu_id = 'M01';
                $update_sql = "UPDATE menu SET menu_stock = menu_stock - 1 WHERE menu_id = 'M01'";
                $conn->query($update_sql);
            }else if($_SESSION['order_2']['menu'] == "DOUBLE PEPPERONI"){
                $menu_id = 'M02';
                $update_sql = "UPDATE menu SET menu_stock = menu_stock - 1 WHERE menu_id = 'M02'";
                $conn->query($update_sql);
            }else if($_SESSION['order_2']['menu'] == "HAM&CRAB STICKS"){
                $menu_id = 'M03';
                $update_sql = "UPDATE menu SET menu_stock = menu_stock - 1 WHERE menu_id = 'M02'";
                $conn->query($update_sql);
            }else if($_SESSION['order_2']['menu'] == "MEAT DELUXE"){
                $menu_id = 'M04';
                $update_sql = "UPDATE menu SET menu_stock = menu_stock - 1 WHERE menu_id = 'M04'";
                $conn->query($update_sql);
            }else if($_SESSION['order_2']['menu'] == "TOM YUM KUNG"){
                $menu_id = 'M05';
                $update_sql = "UPDATE menu SET menu_stock = menu_stock - 1 WHERE menu_id = 'M05'";
                $conn->query($update_sql);
            }else if($_SESSION['order_2']['menu'] == "SEAFOOD DELUXE"){
                $menu_id = 'M06';
                $update_sql = "UPDATE menu SET menu_stock = menu_stock - 1 WHERE menu_id = 'M06'";
                $conn->query($update_sql);
            }
    
            $sql = "SELECT * FROM size";
            $result = $conn->query($sql);
            $size = $_SESSION['order_2']['size'];
            if($size == 'S'){
                $update_sql = "UPDATE size SET size_stock = size_stock - 1 WHERE size = 'S'";
                $conn->query($update_sql);
            }else if($size == 'M'){
                $update_sql = "UPDATE size SET size_stock = size_stock - 1 WHERE size = 'M'";
                $conn->query($update_sql);
            }else{
                $update_sql = "UPDATE size SET size_stock = size_stock - 1 WHERE size = 'L'";
                $conn->query($update_sql);
            }
            
    
            $sql = "SELECT * FROM topping";
            $result = $conn->query($sql);
            if($_SESSION['order_2']['topping'] == 'cheese'){
                $topping_id = 'T01';
                $update_sql = "UPDATE topping SET topping_stock = topping_stock - 1 WHERE topping_id = 'T01'";
                $conn->query($update_sql);
            }if($_SESSION['order_2']['topping'] == 'ham'){
                $topping_id = 'T02';
                $update_sql = "UPDATE topping SET topping_stock = topping_stock - 1 WHERE topping_id = 'T02'";
                $conn->query($update_sql);
            }else{
                $topping_id = 'T03';
                $update_sql = "UPDATE topping SET topping_stock = topping_stock - 1 WHERE topping_id = 'T03'";
                $conn->query($update_sql);
            }
            
            if($_SESSION['order_2']['crust'] == 'Pan Crust'){
                $crust_id = 'C01';
            }if($_SESSION['order_2']['crust'] == 'Crispy Thin'){
                $crust_id = 'C02';
            }if($_SESSION['order_2']['crust'] == 'Cheese Crust'){
                $crust_id = 'C03';
            }else $crust_id = 'C04';
    
            $summary = $_SESSION['order_2']['sum_price'];
            $status = "unpay";
    
            $query = "INSERT INTO orderpizza VALUES ('$order_id', '$menu_id', '$size', '$crust_id', '$topping_id', '$summary', '$status')";
            mysqli_query($conn, $query);
            $order_item = 2;
            $order_price += $_SESSION['order_2']['sum_price'];
        }
    // }
    $conn->close();
?>

<!DOCTYPE html>
<html lang="th">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>page3</title>
        <link rel="stylesheet" href="css/style-page3.css"> <!-- CSS -->
    </head>

    <body>
            <img class="pay" src="images/payment.png">
        <div class="conprom">
            <img class="prom" src="images/cashh.png">
        </div>
        <div class="concash">
            <img class="cash" src="images/cashhh.png">
        </div>

        <!-- ปุ่มเปลี่ยนภาษา -->
        <a href="?lang=en">en</a>
        <a href="?lang=th">th</a>

        <form method="post"  action='page4.php'>
        <button type="submit" name="submit" class="btnprom" id="p4" >
        <script>
            document.getElementById('p4').addEventListener('click', function() {
            window.location.href = 'page4.php'; // เปลี่ยนเส้นทางไปยังหน้าที่สอง
            });
        </script>
        <div><?php echo $lang["PROMPT PAY"]; ?></div>
            <svg fill="none" viewBox="0 0 24 24" height="25px" width="25px" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linejoin="round" stroke-linecap="round" stroke-miterlimit="10" stroke-width="2" stroke="white" d="M11.6801 14.62L14.2401 12.06L11.6801 9.5"></path>
                <path stroke-linejoin="round" stroke-linecap="round" stroke-miterlimit="10" stroke-width="2" stroke="white" d="M4 12.0601H14.17"></path>
                <path stroke-linejoin="round" stroke-linecap="round" stroke-miterlimit="10" stroke-width="2" stroke="white" d="M12 4C16.42 4 20 7 20 12C20 17 16.42 20 12 20"></path>
            </svg>
        
        </button>

        <button type="submit" name="submit" class="btncash">
        <div><?php echo $lang["CASH"]; ?></div>
            <svg fill="none" viewBox="0 0 24 24" height="25px" width="25px" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linejoin="round" stroke-linecap="round" stroke-miterlimit="10" stroke-width="2" stroke="white" d="M11.6801 14.62L14.2401 12.06L11.6801 9.5"></path>
                <path stroke-linejoin="round" stroke-linecap="round" stroke-miterlimit="10" stroke-width="2" stroke="white" d="M4 12.0601H14.17"></path>
                <path stroke-linejoin="round" stroke-linecap="round" stroke-miterlimit="10" stroke-width="2" stroke="white" d="M12 4C16.42 4 20 7 20 12C20 17 16.42 20 12 20"></path>
            </svg>
        </button>
        <form>
    </body>
</html>

