<?php
    require 'connection.php';
    session_start();


    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // รับค่าที่ส่งมาจาก form

        $_SESSION['sum_price'] = 0;
        // set ชื่อเมนู
        if($_POST['order_name'] == "images/cheese pizza.webp"){
            $_SESSION['menu2'] = 'CHEESE PIZZA';
        }else if($_POST['order_name'] == "images/Double pepperoni.webp"){
            $_SESSION['menu2'] = 'Double Pepperoni';
        }else if($_POST['order_name'] == "images/HAM&C.webp"){
            $_SESSION['menu2'] = 'HAM&CRAB STICKS';
        }else if($_POST['order_name'] == "images/TOM YUM KUNG.webp"){
            $_SESSION['menu2'] = 'TOM YUM KUNG';
        }else if($_POST['order_name'] == "images/MEAT DELUXE.webp"){
            $_SESSION['menu2'] = 'MEAT DELUXE';
        }else $_SESSION['menu2'] = 'SEAFOOD DELUXE';
        
        $_SESSION['size'] = $_POST['order_size'];
        $_SESSION['crust'] = $_POST['order_crust'];
        $_SESSION['topping'] = $_POST['order_topping'];
    }
    // set ราคาเมนู
    $sql = "SELECT * FROM menu";
    $result = $conn->query($sql);
    while ($row=$result->fetch_assoc()) {
        if($row['menu_name'] == $_SESSION['menu2']){
            $_SESSION['menu_price'] = $row['menu_price'];
            $_SESSION['sum_price'] += $_SESSION['menu_price'];
        }
    }
    // set ราคาขอบ
    $sql = "SELECT * FROM size";
    $result = $conn->query($sql);
    while ($row=$result->fetch_assoc()) {
        if($row['size'] == $_SESSION['size']){
            $_SESSION['size_price'] = $row['size_price'];
            $_SESSION['sum_price'] += $row['size_price'];
        }
    }
    // set ราคาท็อปปิ้ง
    $sql = "SELECT * FROM topping";
    $result = $conn->query($sql);
    while ($row=$result->fetch_assoc()) {
        if($row['topping_name'] == $_SESSION['topping']){
            $_SESSION['topping_price'] = $row['topping_price'];
            $_SESSION['sum_price'] += $row['topping_price'];
        }
    }
?>


<!DOCTYPE html>
<html lang="th">
    <head>
        <meta charset="UTF-8">
        <title>page2</title>
        <link rel="stylesheet" href="css/style-page2.css"> <!-- CSS -->

    </head>


    <body>
        <script src="script.js"></script> <!-- JS -->
        
        <!-- ปุ่มเปลี่ยนภาษา -->
        <div class="Language"> 
            <form>
                <select name="Language" class="language">
                    <img class="Flag-Thailand" src="images/Flag-Thailand.webp">
                    <option value="thai">TH</option>
                    <option value="english">EN</option>
                </select>
            </form>
        </div>

        <a href="page1_menu.php" target="_self">
            <button class="BACK">back</button>
        </a>
        <img class="IEP" src="images/IT EAT PIZZA.png">

        <!--div class="containerP2"-->
            <form class="PZ" action="" method="post" autocomplete="off">
                <!-- เลือกหน้าพิซซ่า -->
            
                <select class="Pizza" id="order_name" name="order_name" onchange="changeImage()">
                <div class="container21">
                  <div class="C">
                    <option class="img" value="images/Double pepperoni.webp">Double Pepperoni</option>
                    <option class="img" value="images/cheese pizza.webp">CHEESE PIZZA</option>
                    <option class="img" value="images/HAM&C.webp">HAM&CRAB STICKS</option>
                    <option class="img" value="images/TOM YUM KUNG.webp">TOM YUM KUNG</option>
                    <option class="img" value="images/MEAT DELUXE.webp">MEAT DELUXE</option>
                    <option class="img" value="images/SEAFOOD DELUXE.webp">SEAFOOD DELUXE</option>
                 </div>
                </div>
                </select>
            
                <br><br> 
                    <img class="img" id="img_order_name" src="images/Double pepperoni.webp" alt="Selected Image">
                <br><br>

                <!-- เลือก size -->
                <div class="consize">
                    <h1 class="size">SIZE</h1>
                    <!-- type redio ต้องกำหนดให้ name เหมือนกัน -->
                    <input class="s1" type="radio" class="size-s" id="size-S" name="order_size" value="S" required>
                    <label class="s" for="size-s">S</label>
                    <br>
                    <br>
                    <input class="m1" type="radio" id="size-M" name="order_size" value="M" required>
                    <label class="m" for="size-m">M</label>
                    <br>
                    <br>
                    <input class="l1" type="radio" id="size-L" name="order_size" value="L" required>
                    <label class="l" for="size-L">L</label>
                </div>
                <br>

                <!-- เลือกขอบ -->
                <div class="concrust">
                <br>
                <h1 class="crust">CRUST</h1>
                <select class="edge" name="order_crust">
                    <option value='Pan Crust'>PAN CRUST</option>
                    <option value='Crispy Thin'>CRISPY THIN</option>
                    <option value='Cheese Crust'>CHEESE CRUST</option>
                    <option value='Sausage&Cheese Crust'>SAUSAGE&CHEESE CRUST</option>
                </select>
                </div>
                <br><br>
                
                <!-- เลือกท็อปปิ้ง -->
                <div class="contop">
                <div class="radio-inputs">

                <label> 
                    <input class="radio-input" type="radio" name="order_topping" value="pepperoni">
                        <span class="radio-tile" >
                            <span class="radio-icon" >
                                <img class="PEP" src="images/PEPPERONII.webp" > 
                            </span>
                            <span class="radio-label">PEPPERONI</span>
                        </span>
                </label>
                <br>

                <label>
                    <input checked="" class="radio-input" type="radio" name="order_topping" value="ham">
                    <span class="radio-tile">
                        <span class="radio-icon">
                            <svg stroke="currentColor" xml:space="preserve" viewBox="0 0 467.168 467.168" id="Capa_1" version="1.1" fill="none">
                            <img class="HAM" src="images/HAM.webp">
                        </span>
                        <span class="radio-label">HAM</span>
                    </span>
                </label>
                <br>

                <label>
                    <input class="radio-input" type="radio" name="order_topping" value="cheese">
                    <span class="radio-tile">
                        <span class="radio-icon">
                        <img class="HAM" src="images/CHEESE.webp" >
                        </span>
                        <span class="radio-label">CHEESE</span>
                    </span>
                </label>

                </div>
                    </div>

                    <div class="containerP22">
                    <!-- ปุ่มเลือกเมนูเพิ่ม -->
                    <button class="ADD" type="">add</button>

                    <!-- ปุ่มล้างข้อมูล -->
                    <button class="RESET" type="reset">clear</button>

                    <!-- ปุ่มยืนยัน -->
                    <button class="SUBMIT" type="submit" onclick="page3.html">submit</button>
                    </div>
                    <div id="main">
                        <button class="openbtn" type="submit" onclick="openNav()" methode="ch">&#9776; ORDER SUMMARY</button>
                    </div>
        
            </form>
            <br><br>
        
        <!-- สรุปจ่ายตัง -->
        <div id="cart22" class="sidebar">
            <br><br>
            <div class="cart22_container">
                <div class="cart22_header">
                    <div class="center">สินค้าในตะกร้า</div>
                    <div class='left'>-----------------------------------------------------</div><br>
                </div>
                    <?php
                    // ตรวจสอบว่ามีข้อมูลใน session หรือไม่
                    if(isset($_SESSION['menu2']) && isset($_SESSION['size']) && isset($_SESSION['crust']) && isset($_SESSION['topping'])) {
                        // แสดงผลข้อมูลที่เก็บใน session
                        echo "<div class='left'> x1 ";
                        echo $_SESSION['menu2'];
                        echo "</div>"; 
                        echo "<div class='right'>";
                        echo $_SESSION['menu_price'];
                        echo ".00</div>";

                        echo "<div class='left1'>size ";
                        echo $_SESSION['size'];
                        echo "</div>"; 
                        echo "<div class='right'>";
                        echo $_SESSION['size_price'];
                        echo ".00</div>"; 

                        echo "<div class='left1'>";
                        echo $_SESSION['topping'];
                        echo "</div>"; 
                        echo "<div class='right'>";
                        echo $_SESSION['topping_price'];
                        echo ".00</div>";

                        echo "<div class='left1'>";
                        echo $_SESSION['crust'];
                    } 
                    else {
                        echo "<div class='left1'>ขออภัย ขณะนี้ไม่มีสินค้าในตะกร้า</div>";
                    }
                    ?>

                    <br>
                    <p class='left'>-----------------------------------------------------</p><br>
                    <br><p class='left'>-----------------------------------------------------</p><br>
>>>>>>> 5eede6a65d7306b741aee41be2259b58058737f5
                <?php
                    if(isset($_SESSION['menu2']) && isset($_SESSION['size']) && isset($_SESSION['crust']) && isset($_SESSION['topping'])) {
                        echo "<div class='right'>1 ชิ้น</div><br>";
                        echo "<div class='right'>ราคารวม</div>";
                        echo "<div class='right'>฿". $_SESSION['sum_price'] .".00</div>";
                    }else{
                        echo "<div class='right'>0 ชิ้น</div><br>";
                        echo "<div class='right'>ราคารวม</div>";
                        echo "<div class='right'>฿0.00</div>";
                    }
                ?>
                <button type="button" class="button" id="top3">
                <script>
                    document.getElementById('top3').addEventListener('click', function() {
                     window.location.href = 'page3.php'; // เปลี่ยนเส้นทางไปยังหน้าที่สอง
                    });
                </script>
                    <svg viewBox="0 0 16 16" class="bi bi-coin" fill="currentColor" height="16" width="16" xmlns="http://www.w3.org/2000/svg">
                    <path d="M5.5 9.511c.076.954.83 1.697 2.182 1.785V12h.6v-.709c1.4-.098 2.218-.846 2.218-1.932 0-.987-.626-1.496-1.745-1.76l-.473-.112V5.57c.6.068.982.396 1.074.85h1.052c-.076-.919-.864-1.638-2.126-1.716V4h-.6v.719c-1.195.117-2.01.836-2.01 1.853 0 .9.606 1.472 1.613 1.707l.397.098v2.034c-.615-.093-1.022-.43-1.114-.9H5.5zm2.177-2.166c-.59-.137-.91-.416-.91-.836 0-.47.345-.822.915-.925v1.76h-.005zm.692 1.193c.717.166 1.048.435 1.048.91 0 .542-.412.914-1.135.982V8.518l.087.02z"></path>
                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"></path>
                    <path d="M8 13.5a5.5 5.5 0 1 1 0-11 5.5 5.5 0 0 1 0 11zm0 .5A6 6 0 1 0 8 2a6 6 0 0 0 0 12z"></path>
                    </svg>
                        PAYMENT
                </button>
                

            </div>
            
        </div>
    </body>
</html>
<!DOCTYPE html>