<?php
    session_start();

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // รับค่าที่ส่งมาจาก form
        $_SESSION['menu2'] = $_SESSION['menu1'];
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
                <option>PAN CRUST</option>
                <option>CRISPY THIN</option>
                <option>CHEESE CRUST</option>
                <option>SAUSAGE&CHEESE CRUST</option>
            </select>
            </div>
            <br><br>
            
            <div class="contop">
            <div class="radio-inputs">
		<label>
			<input class="radio-input" type="radio" name="engine">
				<span class="radio-tile">
					<span class="radio-icon">
						<img class="PEP" src="images/PEPPERONII.webp"> 
					</span>
					<span class="radio-label">PEPPERONI</span>
				</span>
                
		</label>
        <br>
		<label>
			<input checked="" class="radio-input" type="radio" name="engine">
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
			<input class="radio-input" type="radio" name="engine">
			<span class="radio-tile">
				<span class="radio-icon">
                <img class="HAM" src="images/CHEESE.webp">
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
                <button class="openbtn" type="submit" onclick="openNav()" methode="ch">&#9776; จ่ายตัง</button>
            </div>
        
        
        </form>
        <br><br>
        
        <!-- สรุปจ่ายตัง -->
        <div id="cart22" class="sidebar">
            <br><br>
            <div class="cart22_container">
                <div class="cart22_header">
                    <div>สินค้าในตะกร้า</div>
                </div>
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
                        echo "ขออภัย ขณะนี้ไม่มีสินค้าในตะกร้า";
                    }
                ?>
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