<?php
    require 'connection.php';
    session_start();

    
    if(isset($_POST["submit"])){
        $sql = "SELECT * FROM orderpizza";
        $result = $conn->query($sql);
        $order_id = ($result->num_rows) + 1;

        if(strcmp($_SESSION['order_1']['menu'], "CHEESE PIZZA") == 0){
            $menu_id = 'M01';
        }else if($_SESSION['order_1']['menu'] == "DOUBLE PEPPERONI"){
            $menu_id = 'M02';
        }else if($_SESSION['order_1']['menu'] == "HAM&CRAB STICKS"){
            $menu_id = 'M03';
        }else if($_SESSION['order_1']['menu'] == "MEAT DELUXE"){
            $menu_id = 'M04';
        }else if($_SESSION['order_1']['menu'] == "TOM YUM KUNG"){
            $menu_id = 'M05';
        }else if($_SESSION['order_1']['menu'] == "SEAFOOD DELUXE"){
            $menu_id = 'M06';
        }

        $size = $_SESSION['order_1']['size']; 

        if($_SESSION['order_1']['topping'] == 'cheese'){
            $topping_id = 'T01';
        }if($_SESSION['order_1']['topping'] == 'ham'){
            $topping_id = 'T02';
        }else $topping_id = 'T03';

        
        if($_SESSION['order_1']['crust'] == 'Pan Crust'){
            $crust_id = 'C01';
        }if($_SESSION['order_1']['crust'] == 'Crispy Thin'){
            $crust_id = 'C02';
        }if($_SESSION['order_1']['crust'] == 'Cheese Crust'){
            $crust_id = 'C03';
        }else $crust_id = 'C04';

        $summary = $_SESSION['order_1']['sum_price'];
        $status = "unpay";

        $query = "INSERT INTO orderpizza VALUES ('$order_id', '$menu_id', '$size', '$crust_id', '$topping_id', '$summary', '$status')";
        mysqli_query($conn, $query);

        if(isset($_SESSION['order_2']['size']) == true){
            if(strcmp($_SESSION['order_2']['menu'], "CHEESE PIZZA") == 0){
                $menu_id = 'M01';
            }else if($_SESSION['order_2']['menu'] == "DOUBLE PEPPERONI"){
                $menu_id = 'M02';
            }else if($_SESSION['order_2']['menu'] == "HAM&CRAB STICKS"){
                $menu_id = 'M03';
            }else if($_SESSION['order_2']['menu'] == "MEAT DELUXE"){
                $menu_id = 'M04';
            }else if($_SESSION['order_2']['menu'] == "TOM YUM KUNG"){
                $menu_id = 'M05';
            }else if($_SESSION['order_2']['menu'] == "SEAFOOD DELUXE"){
                $menu_id = 'M06';
            }

            $size = $_SESSION['order_2']['size']; 

            if($_SESSION['order_2']['topping'] == 'cheese'){
                $topping_id = 'T01';
            }if($_SESSION['order_2']['topping'] == 'ham'){
                $topping_id = 'T02';
            }else $topping_id = 'T03';

            
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
        }
    }
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

        <form method="post">
        <button type="submit" name="submit" class="btnprom" id="p4" >
        <script>
            document.getElementById('p4').addEventListener('click', function() {
            window.location.href = 'page4.php'; // เปลี่ยนเส้นทางไปยังหน้าที่สอง
            });
        </script>
        <div>PROMPT PAY</div>
            <svg fill="none" viewBox="0 0 24 24" height="25px" width="25px" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linejoin="round" stroke-linecap="round" stroke-miterlimit="10" stroke-width="2" stroke="white" d="M11.6801 14.62L14.2401 12.06L11.6801 9.5"></path>
                <path stroke-linejoin="round" stroke-linecap="round" stroke-miterlimit="10" stroke-width="2" stroke="white" d="M4 12.0601H14.17"></path>
                <path stroke-linejoin="round" stroke-linecap="round" stroke-miterlimit="10" stroke-width="2" stroke="white" d="M12 4C16.42 4 20 7 20 12C20 17 16.42 20 12 20"></path>
            </svg>
        
        </button>
        

        <button type="submit" name="submit" class="btncash">
        <div>PROMPT PAY</div>
            <svg fill="none" viewBox="0 0 24 24" height="25px" width="25px" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linejoin="round" stroke-linecap="round" stroke-miterlimit="10" stroke-width="2" stroke="white" d="M11.6801 14.62L14.2401 12.06L11.6801 9.5"></path>
                <path stroke-linejoin="round" stroke-linecap="round" stroke-miterlimit="10" stroke-width="2" stroke="white" d="M4 12.0601H14.17"></path>
                <path stroke-linejoin="round" stroke-linecap="round" stroke-miterlimit="10" stroke-width="2" stroke="white" d="M12 4C16.42 4 20 7 20 12C20 17 16.42 20 12 20"></path>
            </svg>
        </button>
        <form>
    </body>
</html>