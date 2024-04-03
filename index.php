<!DOCTYPE html>
<html>
<head>
    <title>index</title>
    <!--เชื่อม CSS-->
    <link rel="stylesheet" href="css/style-index.css">
    <script>
        document.addEventListener('click', function(event) {
            // รับ URL ที่ต้องการเปิด
            var url = 'page1_menu.php'; // เปลี่ยนเป็น URL ที่ต้องการไป 
            window.location.href = url;
        });
    </script>
</head>

<body>
    <!-- <img src="images/ItIsPizza.jpg" class="ItIsPizza"> -->

    <!--เชื่อม JS-->
    <!-- <script src = "script.js"></script> -->
    <link rel="stylesheet" href="script.js">
  
    <div class="Language"> 
        <form>
            
            <select name="Language" class="language">
                <img class="Flag-Thailand" src="images/Flag-Thailand.webp">
                <option value="thai">TH</option>
                <option value="emglish">EN</option>
            </select>
        </form>
    </div>
    <p class="ItIsPizza">
       <img src="images/page1.png"
    </p>
    <h1 class="tap-to-start">TAP TO START</h1>
</body>
</html>