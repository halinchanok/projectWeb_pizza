<?php
    require 'connection.php';
    session_start();

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
        if(isset($_POST['paid-btn'])){
            $update_sql = "UPDATE orderpizza SET status_order = 'pay'";
            $conn->query($update_sql);
        }
    }
    // echo $_SESSION['stock_pep'];
    // echo $_SESSION['stock_ham'];
    // echo $_SESSION['stock_cheese'];

    $sql = "SELECT * FROM orderpizza";
    $result = $conn->query($sql);

    // คำนวณเงินรวมที่ขายได้
    $summary = 0;
    while($row=$result->fetch_assoc()){
        $summary += $row['summary'];
    }          
    
    // จำนวนออเดอร์ที่ขายได้
    $sum = $result->num_rows;

    $conn->close();
?>

<!DOCTYPE html>
<html lang="th">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>ADMIN SYSTEM</title>
        <link rel="stylesheet" href="css/style-admin.css"> <!-- CSS -->
    </head>

    <body>
            <script src="script.js"></script> <!-- JS -->
           <div class="head"><br>
                <div class="adsys">ADMIN SYSTEM</div>
           </div>

           <div class="sum">
                <div class="a">
                    <div class="Orderquantity">Order quantity</div>
                    <!-- จำนวนออเดอร์ที่สั่ง (ตกแต่งตรงนี้ได้เลย) -->
                    <div  class='orcount'><?php echo $sum; ?></div>
                </div>
                <div class="b">
                    <div class="Totalamount">Total amount</div>
                    <!-- จำนวนเงินรวม (ตกแต่งตรงนี้ได้เลย)-->
                    <div class='oramount'> <?php echo $summary; ?> </div>
                </div>
           </div>
           
           <div class="Order">Order list</div>
           
           <div class="bar">
                <div class="li">Number</div>
                <div class="ordermenu">Menu</div>
                <div class="ordersize">Size</div>
                <div class="ordercrust">Crust</div>
                <div class="ordertopping">Topping</div>
                <div class="summoney">Sum</div>
                <div class="statuscus">CustomerStatus</div>
                <div class="statusstore">StoreStatus</div>
           </div><br><br><br>
           <div>
                <?php
                    require 'connection.php';

                    $sql = "SELECT * FROM orderpizza";
                    $result = $conn->query($sql);
                    
                    // พิมพ์คำสั่งซื้อแต่ละออเดอร์
                    $count = 0;
                    if($result->num_rows > 0){
                        while($row=$result->fetch_assoc()){
                            // menu
                            if($row['menu_id'] == 'M01'){
                                $menu = "CHEESE PIZZA";
                            }else if($row['menu_id'] == 'M02'){
                                $menu = "DOUBLE PEPPERONI";
                            }else if($row['menu_id'] == 'M03'){
                                $menu = "HAM&CRAB STICKS";
                            }else if($row['menu_id'] == 'M04'){
                                $menu = "TOM YUM KUNG";
                            }else if($row['menu_id'] == 'M05'){
                                $menu = "MEAT DELUXE";
                            }else $menu = "SEAFOOD DELUXE";

                            // crust
                            if($row['crust_id'] == 'C01'){
                                $crust = "PAN CRUST";
                            }else if($row['crust_id'] == 'C02'){
                                $crust = "CRISPY THIN";
                            }else if($row['crust_id'] == 'C03'){
                                $crust = "CHEESE CRUST";
                            }else $crust = "SAUSAGE&CHEESE CRUST";
                            
                            // topping
                            if($row['topping_id'] == 'T01'){
                                $topping = "cheese";
                            }else if($row['topping_id'] == 'T01'){
                                $topping = "ham";
                            }else $topping = "pepperoni";

                            // ออมสินตกแต่งตรงนี้ได้
                            if($count != $row['order_id']){
                                echo "<div class='bar'>";
                                echo "<tr>
                                        <td><div class='id'>".$row['order_id'] ."</div></td>
                                        <td><div class='menu'>".$menu."</div></td>
                                        <td><div class='size'>".$row['size']."</div></td>
                                        <td><div class='crust'>".$crust."</div></td>
                                        <td><div class='topping'>".$topping."</div></td>
                                        <td><div class='sum1'>".$row['summary']."</div></td>
                                        <div class='paid'> Paid </div>
                                        <td><button class='paid-btn' name='paid-btn' onclick='changeColor(this)' onclick='changeStatus(this)'>Order</button></td>
                                        <script>
                                        function changeColor(button) {
                                            button.classList.toggle('clicked');
                                        }
                                        </script>
                                        
                                    </tr></div>";
                                $sum++;
                                echo "<br><br><br>";
                            }else {
                                echo "<div class='bar'>";
                                echo "<tr>
                                        <td><div class='id'>". " " ."</div></td>
                                        <td><div class='menu'>".$menu."</div></td>
                                        <td><div class='size'>".$row['size']."</div></td>
                                        <td><div class='crust'>".$crust."</div></td>
                                        <td><div class='topping'>".$topping."</div></td>
                                        <td><div class='sum1'>".$row['summary']."</div></td>
                                        <div class='paid'> Paid </div>
                                        </script>
                                    </tr></div>";
                                $sum++;
                                echo "<br><br><br>";
                            }
                            $count = $row['order_id'];
                        }
                        echo "</div>";
                    }else{
                        // echo "0 rows available";
                    }
                    $conn->close();
                ?>
                <br><br><br><br>
                <div>
                    <div class='sp'>stock pepperoni</div>
                    <form method='post'>
                        <select class="stock_pep" name="stock_pep" onchange="this.form.submit()">
                            <option >กรุณาเลือก</option>
                            <option value='out'>ปิด</option>
                            <option value='in'>เปิด</option>
                        </select>
                    </form>
                    <div class='sh'>stock ham</div>
                    <form method='post'>
                        <select class="stock_ham" name="stock_ham" onchange="this.form.submit()">
                            <option >กรุณาเลือก</option>
                            <option value='out'>ปิด</option>
                            <option value='in'>เปิด</option>
                        </select>
                    </form>
                    <div class='sc'>stock cheese</div>
                    <form method='post'>
                        <select class="stock_cheese" name="stock_cheese" onchange="this.form.submit()">
                            <option >กรุณาเลือก</option>
                            <option value='out'>ปิด</option>
                            <option value='in'>เปิด</option>
                        </select>
                    </form>
                </div>
           </div> 
    </body>
</html> 