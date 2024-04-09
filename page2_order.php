<?php
    if(isset($_SESSION['language'])){
        if($_SESSION['language'] == 'th'){
            require 'lang_th.php';
        }else if($_SESSION['language'] == 'en'){
            require 'lang_en.php';
        }
    }
    // order_1
    if(isset($_SESSION['order_1']['size']) == true){
        // menu
        echo "<div class='left'> x1 ";
        if(strcmp($_SESSION['order_1']['menu'], "DOUBLE CHEESE") == 0){
            echo $lang["DOUBLE CHEESE"];
        }else if($_SESSION['order_1']['menu'] == "DOUBLE PEPPERONI"){
            echo $lang["DOUBLE PEPPERONI"];
        }else if($_SESSION['order_1']['menu'] == "HAM&CRAB STICKS"){
            echo $lang["HAM&CRAB STICKS"];
        }else if($_SESSION['order_1']['menu'] == "MEAT DELUXE"){
            echo $lang["MEAT DELUXE"];
        }else if($_SESSION['order_1']['menu'] == "TOM YUM KUNG"){
            echo $lang["TOM YUM KUNG"];
        }else if($_SESSION['order_1']['menu'] == "SEAFOOD DELUXE"){
            echo $lang["SEAFOOD DELUXE"];
        }echo "</div>";
        echo "<div class='right'>". $_SESSION['order_1']['menu_price'] .".00</div>";

        // size
        echo "<div class='left1'>". $lang['SIZE'] ." ". $_SESSION['order_1']['size'] ."</div>"; 
        echo "<div class='right'>". $_SESSION['order_1']['size_price'] .".00</div>"; 

        // topping
        echo "<div class='left1'>";
        if($_SESSION['order_1']['topping'] == 'cheese'){
            echo $lang["CHEESE"];
        }if($_SESSION['order_1']['topping'] == 'ham'){
            echo $lang['HAM'];
        }else echo $lang["PEPPERONI"];
        echo "</div>";
        echo "<div class='right'>". $_SESSION['order_1']['topping_price'].".00</div>";   
        
        // crust
        echo "<div class='left1'>";
        if($_SESSION['order_1']['crust'] == 'PAN CRUST'){
            echo $lang["PAN CRUST"];
        }if($_SESSION['order_1']['crust'] == 'CRISPY THIN'){
            echo $lang["CRISPY THIN"];
        }if($_SESSION['order_1']['crust'] == 'CHEESE CRUST'){
            echo $lang["CHEESE CRUST"];
        }else echo $lang["SAUSAGE&CHEESE CRUST"];
        echo "</div>";
        // price
        echo "<div class='right'><br>" . $_SESSION['order_1']['sum_price'] . ".00 <br></div> ";
    }else {
        echo "<div class='left1'>". $lang["SORRY"] ."</div>";
    }
    

    echo "<br><br>";
    // order_2
    if(isset($_SESSION['order_2']['size']) == true){
        // menu
        echo "<div class='left'> x1 ";
        if(strcmp($_SESSION['order_2']['menu'], "DOUBLE CHEESE") == 0){
            echo $lang["DOUBLE CHEESE"];
        }else if($_SESSION['order_2']['menu'] == "DOUBLE PEPPERONI"){
            echo $lang["DOUBLE PEPPERONI"];
        }else if($_SESSION['order_2']['menu'] == "HAM&CRAB STICKS"){
            echo $lang["HAM&CRAB STICKS"];
        }else if($_SESSION['order_2']['menu'] == "MEAT DELUXE"){
            echo $lang["MEAT DELUXE"];
        }else if($_SESSION['order_2']['menu'] == "TOM YUM KUNG"){
            echo $lang["TOM YUM KUNG"];
        }else if($_SESSION['order_2']['menu'] == "SEAFOOD DELUXE"){
            echo $lang["SEAFOOD DELUXE"];
        }echo "</div>";
        echo "<div class='right'>". $_SESSION['order_2']['menu_price'] .".00</div>";

        // size
        echo "<div class='left1'>". $lang['SIZE'] ." ". $_SESSION['order_2']['size'] ."</div>"; 
        echo "<div class='right'>". $_SESSION['order_2']['size_price'] .".00</div>"; 

        // topping
        echo "<div class='left1'>";
        if($_SESSION['order_2']['topping'] == 'cheese'){
            echo $lang["CHEESE"];
        }if($_SESSION['order_2']['topping'] == 'ham'){
            echo $lang['HAM'];
        }else echo $lang["PEPPERONI"];
        echo "</div>";
        echo "<div class='right'>". $_SESSION['order_2']['topping_price'].".00</div>";   
        
        // crust
        echo "<div class='left1'>";
        if($_SESSION['order_2']['crust'] == 'PAN CRUST'){
            echo $lang["PAN CRUST"];
        }if($_SESSION['order_2']['crust'] == 'CRISPY THIN'){
            echo $lang["CRISPY THIN"];
        }if($_SESSION['order_2']['crust'] == 'CHEESE CRUST'){
            echo $lang["CHEESE CRUST"];
        }else echo $lang["SAUSAGE&CHEESE CRUST"];
        echo "</div>";

        // price
        echo "<div class='right'><br>" . $_SESSION['order_2']['sum_price'] . ".00 </div>";

    }
?>