<?php
    session_start();

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // รับค่าที่ส่งมาจาก form
        $_SESSION['menu'] = $_POST['order_name'];
        $_SESSION['size'] = $_POST['order_size'];
        $_SESSION['crust'] = $_POST['order_crust'];
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

        <a href="page1_menu.php" target="_self">
            <button class="BACK">back</button>
        </a>
        <img class="IEP" src="images/IT EAT PIZZA.png">
        
        <div class="containerP2">
            <form class="" action="" method="post" autocomplete="off">
            <!-- เลือกหน้าพิซซ่า -->
            <select class="Pizza" id="order_name" name="order_name" onchange="changeImage()">
                <option class="img" value="images/Double pepperoni.webp">Double Pepperoni</option>
                <option class="img" value="images/cheese pizza.webp">CHEESE PIZZA</option>
                <option class="img" value="images/HAM&C.webp">HAM&CRAB STICKS</option>
                <option class="img" value="images/TOM YUM KUNG.webp">TOM YUM KUNG</option>
                <option class="img" value="images/MEAT DELUXE.webp">MEAT DELUXE</option>
                <option class="img" value="images/SEAFOOD DELUXE.webp">SEAFOOD DELUXE</option>
            </select>
            <br><br>
                
                <img class="img" id="img_order_name" src="images/Double pepperoni.webp" alt="Selected Image">
            <br><br>

            <!-- เลือก size -->
            <h1 class="size">ขนาด</h1>
            <!-- type redio ต้องกำหนดให้ name เหมือนกัน -->
            <label class="s" for="size-s">S</label>
            <input class="s1" type="radio" class="size-s" id="size-S" name="order_size" value="S" required>
            <label class="m" for="size-m">M</label>
            <input class="m1" type="radio" id="size-M" name="order_size" value="M" required>
            <label class="l" for="size-L">L</label>
            <input class="l1" type="radio" id="size-L" name="order_size" value="L" required>
            <br>

            <!-- เลือกขอบ -->
            <h1 class="crust">เลือกขอบ</h1>
            <select class="edge" name="order_crust">
                <option>ขอบหนานุ่ม</option>
                <option>บางกรอบ</option>
                <option>ขอบชีส</option>
                <option>ขอบไส้กรอกชีส</option>
            </select>
            <br><br>
            
            <div class="containerP21">
                <div class="Topping1">
                    <img src="images/PEPPERONII.webp">
                    <div class="PEP">PEPPERONI</div> 
                    <button class="BT7" id="btn7"> ข้อความ </button>    
                </div>
                
                <div class="Topping2">
                    <img src="images/CHEESE.webp">
                    <div class="CHE">CHEESE</div> 
                    <button class="BT8" id="btn7"> ข้อความ </button>    
                </div>

                <div class="Topping3">
                    <img src="images/HAM.webp">
                    <div class="HAM">HAM</div> 
                    <button class="BT9" id="btn7"> ข้อความ </button>    
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
                <button class="openbtn" type="submit" onclick="openNav()" methode="ch">&#9776; จ่ายตัง</button>
            </div>
        
        
        </form>
        <br><br>
        
        <!-- สรุปจ่ายตัง -->
        <div id="cart22" class="sidebar">
            <?php
                // ตรวจสอบว่ามีข้อมูลใน session หรือไม่
                if(isset($_SESSION['menu']) && isset($_SESSION['size']) && isset($_SESSION['crust'])) {
                    // แสดงผลข้อมูลที่เก็บใน session
                    if($_SESSION['menu'] == "images/cheese pizza.webp"){
                        echo "เมนู: " . "CHEESE PIZZA" . "<br>";
                    }else if($_SESSION['menu'] == "images/Double pepperoni.webp"){
                        echo "เมนู: " . "Double Pepperoni" . "<br>";
                    }else if($_SESSION['menu'] == "images/HAM&C.webp"){
                        echo "เมนู: " . "HAM&CRAB STICKS" . "<br>";
                    }else if($_SESSION['menu'] == "images/TOM YUM KUNG.webp"){
                        echo "เมนู: " . "TOM YUM KUNG" . "<br>";
                    }else if($_SESSION['menu'] == "images/MEAT DELUXE.webp"){
                        echo "เมนู: " . "MEAT DELUXE" . "<br>";
                    }else echo "เมนู: " . "SEAFOOD DELUXE" . "<br>";
                    echo "ขนาด: " . $_SESSION['size'] . "<br>";
                    echo "ขอบ: " . $_SESSION['crust'] . "<br>";
                } 
                else {
                    echo "ยังไม่มีข้อมูลที่เก็บใน Session";
                }
            ?>
            <br><br>
            <div class="cart22_container">
                <div class="cart22_header">
                    <div>สินค้าในตะกร้า</div>
                </div>

                <div class="cart22_content">
                    <div><span>ขออภัย ขณะนี้ไม่มีสินค้าในตะกร้า</span></div>
                    <!--ไว้จะมาเชื่อม PHP นะจ๊ะ -->
                </div>
                <div class="cart22_tailer">
                    <div class="cart22_summary">
                        <div class="cart22_summary_label">
                            <div>ราคาสินค้าทั้งหมด</div>
                            <div class="minor">0 ชิ้น</div>
                        </div>
                        <div class="cart22_summary_amount">
                            <div>฿ 0.00</div>
                            <div class="minor">ราคารวม</div>
                        </div>
                    </div>
                    <div class="cart22_action">
                        <div class="cart22_countinue">
                            <span style="transform: rotate(180deg) ; display: inline-block;">⟶</span>
                            เลือกสินค้าเพิ่มเติม<br><br>
                        </div>
                        <div class="cart22_button cart22_checkout" style="background-color: rgb(156, 39, 176);">จ่ายตัง</div>
                    </div>
                </div>
            </div>
        </div>
        <!-- <div id="main">
            <button class="openbtn" onclick="openNav()" methode="ch">&#9776; จ่ายตัง</button>
        </div>

    </body>
    </html>
<!DOCTYPE html>