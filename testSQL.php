<?php
    $host='localhost';
    $user='root';
    $pass=''; 
    $db='pizzastore'; 
    $conn= mysqli_connect($host,$user,$pass,$db); //เชื่อมต่อ serrver database

    if(isset($_POST["submit"])){
        $menu_id = 'M01'; 
        $size = 'S'; 
        $crust_id = 'C01'; 
        $topping_id = 'T01'; 
        
        $query = "INSERT INTO orderpizza VALUES ('', '$menu_id', '$size', '$crust_id', '$topping_id')";
        mysqli_query($conn, $query);
    }

?>

<!DOCTYPE html>
<html lang="th">
<form method="post" >
    <!-- ฟิลด์อื่น ๆ ของฟอร์ม -->
    <button type="submit" name="submit" value="Submit">submit</button>
</form>
</html>
<!DOCTYPE html>
