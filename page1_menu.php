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
    $_SESSION['menu'] = null;
    $_SESSION['size'] = null;
    $_SESSION['crust'] = null;
    $_SESSION['topping'] = null;
    $_SESSION['sum_price'] = 0;

    $_SESSION['order_1'] = array(
        'menu' => null,
        'menu_price' => null,
        'size' => null,
        'size_price' => null,
        'crust' => null,
        'topping' => null,
        'topping_price' => null,
        'sum_price' => null
    );
    $_SESSION['order_2'] = array(
        'menu' => null,
        'menu_price' => null,
        'size' => null,
        'size_price' => null,
        'crust' => null,
        'topping' => null,
        'topping_price' => null,
        'sum_price' => null
    );
?>

<!DOCTYPE html>
<html lang="th">
    <head>
        <meta charset="UTF-8">
        <title>index</title>
        <link rel="stylesheet" href="css/style-page1.css"> 
        
    </head>
    <body>
        <script src="script.js"></script>
        <IMG class="HEAD" src="images/menu.png">

        <!-- ปุ่มเปลี่ยนภาษา -->
        <div class="conflag"> 
            <a href="?lang=th"><img class="flag" src="images/Flag-Thailand.webp" alt="Thai Flag"></a>
        </div>
        <div class="conflag"> 
            <a href="?lang=en"><img class="flagen" src="images/eng.png" alt="English Flag"></a>
        </div>

        <!-- เลือกหน้าพิซซ่า -->
        <div class="container">
            <img class="best" src="images/bestsell.png">
            <img class="best2" src="images/bestsell.png">

            <div class="menu1"  method="post">
                <img src="images/cheese pizza.webp">
                <div class="cs"><?php echo $lang['CHEESE PIZZA']; ?></div>
                <button class="BT1" id="btn1"> ข้อความ </button>    
            </div>
            <script>
                document.getElementById('btn1').addEventListener('click', function() {
                  window.location.href = 'page2C.php'; // เปลี่ยนเส้นทางไปยังหน้าที่สอง
                });
            </script>
                
            <div class="menu2"  method="post">
                <img src="images/Double pepperoni.webp">
                <div class="cs"><?php echo $lang['DOUBLE PEPPERONI']; ?></div>
                <button class="BT2" id="btn2"> ข้อความ </button>    
            </div>
            <script>
                document.getElementById('btn2').addEventListener('click', function() {
                  window.location.href = 'page2P.php'; // เปลี่ยนเส้นทางไปยังหน้าที่สอง
                });
            </script>

            <div class="menu3">
                <img src="images/HAM&C.webp">
                <div class="cs"><?php echo $lang['HAM&CRAB STICKS']; ?></div> 
                <button class="BT3" id="btn3"> ข้อความ </button>    
            </div>
            <script>
                document.getElementById('btn3').addEventListener('click', function() {
                  window.location.href = 'page2H.php'; // เปลี่ยนเส้นทางไปยังหน้าที่สอง
                });
            </script>
        </div>

        <br>

        <div class="container2">
            <img class="best3" src="images/bestsell.png">
            <div class="menu">
                <img src="images/MEAT DELUXE.webp">
                <div class="cs"><?php echo $lang['MEAT DELUXE']; ?></div> 
                <button class="BT4" id="btn4"> ข้อความ </button>    
            </div>
            <script>
                document.getElementById('btn4').addEventListener('click', function() {
                  window.location.href = 'page2M.php'; // เปลี่ยนเส้นทางไปยังหน้าที่สอง
                });
            </script>
            <div class="menu">
                <img src="images/TOM YUM KUNG.webp">
                <div class="cs"><?php echo $lang['TOM YUM KUNG']; ?></div> 
                <button class="BT5" id="btn5"> ข้อความ </button>    
            </div>
            <script>
                document.getElementById('btn5').addEventListener('click', function() {
                  window.location.href = 'page2T.php'; // เปลี่ยนเส้นทางไปยังหน้าที่สอง
                });
            </script>

            <div class="menu">
                <img src="images/SEAFOOD DELUXE.webp">
                <div class="cs"><?php echo $lang['SEAFOOD DELUXE']; ?></div> 
            <button class="BT6" id="btn6"> ข้อความ </button>    
            </div>
            <script>
                document.getElementById('btn6').addEventListener('click', function() {
                  window.location.href = 'page2S.php'; // เปลี่ยนเส้นทางไปยังหน้าที่สอง
                });
            </script>
        </div>
        
    </body>
    </html>
<!DOCTYPE html>