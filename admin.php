<?php
    require 'connection.php';
    session_start();

    $_SESSION['stock_cheese'] = 'in';
    $_SESSION['stock_pep'] = 'in';
    $_SESSION['stock_ham'] = 'in';

    // เปลี่ยนค่า session เมื่อมีการเลือก option ใหม่
    if(isset($_POST['selected_option'])) {
        $_SESSION['stock_cheese'] = $_POST['selected_option'];
        $_SESSION['stock_pep'] = $_POST['selected_option'];
        $_SESSION['stock_ham'] = $_POST['selected_option'];
    }

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
           <div class="head"><br>
                <div class="adsys">ADMIN SYSTEM</div>
           </div>

           <div class="sum">
                <div class="a">
                    <div class="Orderquantity">Order quantity</div>
                    <!-- จำนวนออเดอร์ที่สั่ง (ตกแต่งตรงนี้ได้เลย) -->
                    <div><?php echo $sum; ?></div>
                </div>
                <div class="b">
                    <div class="Totalamount">Total amount</div>
                    <!-- จำนวนเงินรวม (ตกแต่งตรงนี้ได้เลย)-->
                    <div> <?php echo $summary; ?> </div>
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
                            echo "<div class='bar'>";
                            echo "<tr>
                                    <td>".$row['order_id'] ."</td>
                                    <td>".$menu."</td>
                                    <td>".$row['size']."</td>
                                    <td>".$crust."</td>
                                    <td>".$topping."</td>
                                    <td>".$row['summary']."</td>
                                </tr>";
                            // echo "<div class='bar'>". $row['order_id'] . $menu . $row['size']. $crust .$topping .$row['summary'] . $row['status_order']."</div>";
                            $sum++;
                            echo "<br><br><br>";
                        }
                        echo "</div>";
                    }else{
                        echo "0 rows available";
                    }
                    $conn->close();
                ?>
                <br><br><br><br>
                <div>
                    <div>STOCK</div>
                    <div>CHEESE</div>
                    <select class="stock_cheese">
                            <div class="connn">
                                <option value='in' <?php $_SESSION['stock_cheese'] = 'in'; ?>>IN STOCK</option>
                                <option value='out' <?php $_SESSION['stock_cheese'] = 'out'; ?>>OUT OF STOCK</option>
                            </div>
                    </select>

                    <?php echo $_SESSION['stock_cheese'];?>

                    <div>HAM</div>
                    <select class="stock_ham">
                            <div class="connn">
                                <option value='in'>IN STOCK</option>
                                <option value='out'>OUT OF STOCK</option>
                            </div>
                    </select>

                    <?php echo $_SESSION['stock_ham'];?>

                    <div>PEPPERONI</div>
                    <select class="stock_pep">
                            <div class="connn">
                                <option value='in'>IN STOCK</option>
                                <option value='out'>OUT OF STOCK</option>
                            </div>
                    </select>

                    <?php echo $_SESSION['stock_pep'];?>
                </div>
           </div> 
    </body>
</html> 