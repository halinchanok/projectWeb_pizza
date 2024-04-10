<!DOCTYPE html>
<html lang="th">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>page5</title>
        <link rel="stylesheet" href="css/style-page6.css"> <!-- CSS -->
    </head>

    <body>
            <img class="success" src="images/finish.png">
            <script>
                document.querySelector('.success').addEventListener('click', function() {
                    // นำผู้ใช้ไปยังหน้าถัดไป
                window.location.href = 'index.php';
                 });
            </script>
    </body>
</html>