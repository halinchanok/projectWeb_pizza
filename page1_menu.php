<?php
    session_start();
    $_SESSION['menu1'] = null;
    $_SESSION['size'] = null;
    $_SESSION['crust'] = null;
    $_SESSION['topping'] = null;

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $_SESSION['menu1'] = $_POST['order_name'];

        // Redirect to next page after saving data in session
        header("Location: page2.php");
        exit();
    }
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


        <div class="container">
            <img class="best" src="images/bestsell.png">
            <img class="best2" src="images/bestsell.png">
            <div class="menu1">
                <img src="images/cheese pizza.webp">
                <div class="cs">CHEESE PIZZA</div>
                <button class="BT1" id="btn1"> ข้อความ </button>    
            </div>
            <script>
                document.getElementById('btn1').addEventListener('click', function() {
                  window.location.href = 'page2.php'; // เปลี่ยนเส้นทางไปยังหน้าที่สอง
                });
            </script>
                
            <div class="menu2">
                <img src="images/Double pepperoni.webp">
                <div class="cs">DOUBLE PEPPERONI</div>
                <button class="BT2" id="btn2"> ข้อความ </button>    
            </div>
            <script>
                document.getElementById('btn2').addEventListener('click', function() {
                  window.location.href = 'page2.php'; // เปลี่ยนเส้นทางไปยังหน้าที่สอง
                });
            </script>

            <div class="menu3">
                <img src="images/HAM&C.webp">
                <div class="cs">HAM&CRAB STICKS</div> 
                <button class="BT3" id="btn3"> ข้อความ </button>    
            </div>
            <script>
                document.getElementById('btn3').addEventListener('click', function() {
                  window.location.href = 'page2.php'; // เปลี่ยนเส้นทางไปยังหน้าที่สอง
                });
            </script>
        </div>

        <br>
            
        <div class="container2">
            <img class="best3" src="images/bestsell.png">
            <div class="menu">
                <img src="images/MEAT DELUXE.webp">
                <div class="cs">MEAT DELUXE</div> 
                <button class="BT4" id="btn4"> ข้อความ </button>    
            </div>
            <script>
                document.getElementById('btn4').addEventListener('click', function() {
                  window.location.href = 'page2.php'; // เปลี่ยนเส้นทางไปยังหน้าที่สอง
                });
            </script>
            <div class="menu">
                <img src="images/TOM YUM KUNG.webp">
                <div class="cs">TOM YUM KUNG</div> 
                <button class="BT5" id="btn5"> ข้อความ </button>    
            </div>
            <script>
                document.getElementById('btn5').addEventListener('click', function() {
                  window.location.href = 'page2.php'; // เปลี่ยนเส้นทางไปยังหน้าที่สอง
                });
            </script>

            <div class="menu">
                <img src="images/SEAFOOD DELUXE.webp">
                <div class="cs">SEAFOOD DELUXE</div> 
            <button class="BT6" id="btn6"> ข้อความ </button>    
            </div>
            <script>
                document.getElementById('btn6').addEventListener('click', function() {
                  window.location.href = 'page2.php'; // เปลี่ยนเส้นทางไปยังหน้าที่สอง
                });
            </script>
        </div>
        
    </body>
    </html>
<!DOCTYPE html>