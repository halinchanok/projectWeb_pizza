<!DOCTYPE html>
<html lang="th">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>page4</title>
        <link rel="stylesheet" href="css/style-page4.css"> <!-- CSS -->
    </head>

    <body>
            <img class="receipt" src="images/receipt2.png">
            <div class="QR">
             Scan the QR code to pay
            </div><br>
            <div class="name">
             IT EAT PIZZA.CO.TH
            </div>
            <script>
                document.querySelector('.receipt').addEventListener('click', function() {
                    // นำผู้ใช้ไปยังหน้าถัดไป
                window.location.href = 'page5.php';
                 });
            </script>
    </body>
</html>
