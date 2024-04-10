<!DOCTYPE html>
<html lang="th">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>page4</title>
        <link rel="stylesheet" href="css/style-page4.1.css"> <!-- CSS -->
    </head>

    <body>
            <img class="receipt" src="images/casheiei.png">
            <div class="summ">
                กรุณาชำระเงิน
            </div>
            <br>
            <div class="summ1">
                Please pay
            </div>
            <br>
            <div class="amount">
                <?php session_start(); echo $_SESSION['order_1']['sum_price'] +$_SESSION['order_2']['sum_price'] ." ฿" ; ?>
                
            </div>
            
            <script>
                document.querySelector('.receipt').addEventListener('click', function() {
                    // นำผู้ใช้ไปยังหน้าถัดไป
                window.location.href = 'page5.php';
                 });
            </script>
    </body>
</html>
