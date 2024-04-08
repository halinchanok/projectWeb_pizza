<?php
    // order_1
    if(isset($_SESSION['order_1'])){
        // menu
        echo "<div class='left'> x1 ";
        if(strcmp($_SESSION['order_1']['menu'], "CHEESE PIZZA") == 0){
            echo $lang_cheese;
        }else if($_SESSION['order_1']['menu'] == "DOUBLE PEPPERONI"){
            echo $lang_pepperoni;
        }else if($_SESSION['order_1']['menu'] == "HAM&CRAB STICKS"){
            echo $lang_ham;
        }else if($_SESSION['order_1']['menu'] == "MEAT DELUXE"){
            echo $lang_deluxe;
        }else if($_SESSION['order_1']['menu'] == "TOM YUM KUNG"){
            echo $lang_tomyum;
        }else if($_SESSION['order_1']['menu'] == "SEAFOOD DELUXE"){
            echo $lang_seafood;
        }echo "</div>";
        echo "<div class='right'>". $_SESSION['order_1']['menu_price'] .".00</div>";

        // size
        echo "<div class='left1'>". $lang_size ." ". $_SESSION['order_1']['size'] ."</div>"; 
        echo "<div class='right'>". $_SESSION['order_1']['size_price'] .".00</div>"; 

        // topping
        echo "<div class='left1'>";
        if($_SESSION['order_1']['topping'] == 'cheese'){
            echo $lang_cheese2;
        }if($_SESSION['order_1']['topping'] == 'ham'){
            echo $lang_ham;
        }else echo $lang_pepperoni;
        echo "</div>";
        echo "<div class='right'>". $_SESSION['order_1']['topping_price'].".00</div>";   
        
        // crust
        echo "<div class='left1'>";
        if($_SESSION['order_1']['crust'] == 'PAN CRUST'){
            echo $lang_pan;
        }if($_SESSION['order_1']['crust'] == 'CRISPY THIN'){
            echo $lang_crispy;
        }if($_SESSION['order_1']['crust'] == 'CHEESE CRUST'){
            echo $lang_cheese;
        }else echo $lang_sau;
        echo "</div>";
    }else {
        echo "<div class='left1'>". $lang_sorry ."</div>";
    }
    // price
    echo "<div class='right'>" . $_SESSION['order_1']['sum_price'] . ".00</div>";


    echo "<br><br>";
    // order_2
    if(isset($_SESSION['order_2'])){
        // menu
        echo "<div class='left'> x1 ";
        if(strcmp($_SESSION['order_2']['menu'], "CHEESE PIZZA") == 0){
            echo $lang_cheese;
        }else if($_SESSION['order_2']['menu'] == "DOUBLE PEPPERONI"){
            echo $lang_pepperoni;
        }else if($_SESSION['order_2']['menu'] == "HAM&CRAB STICKS"){
            echo $lang_ham;
        }else if($_SESSION['order_2']['menu'] == "MEAT DELUXE"){
            echo $lang_deluxe;
        }else if($_SESSION['order_2']['menu'] == "TOM YUM KUNG"){
            echo $lang_tomyum;
        }else if($_SESSION['order_2']['menu'] == "SEAFOOD DELUXE"){
            echo $lang_seafood;
        }
        echo "<div class='right'>". $_SESSION['order_2']['menu_price'] .".00</div>";

        // size
        echo "<div class='left1'>". $lang_size ." ". $_SESSION['order_2']['size'] ."</div>"; 
        echo "<div class='right'>". $_SESSION['order_2']['size_price'] .".00</div>"; 

        // topping
        echo "<div class='left1'>";
        if($_SESSION['order_2']['topping'] == 'cheese'){
            echo $lang_cheese2;
        }if($_SESSION['order_2']['topping'] == 'ham'){
            echo $lang_ham;
        }else echo $lang_pepperoni;
        echo "</div>";
        echo "<div class='right'>". $_SESSION['order_2']['topping_price'].".00</div>";   
        
        // crust
        echo "<div class='left1'>";
        if($_SESSION['order_2']['crust'] == 'PAN CRUST'){
            echo $lang_pan;
        }if($_SESSION['order_2']['crust'] == 'CRISPY THIN'){
            echo $lang_crispy;
        }if($_SESSION['order_2']['crust'] == 'CHEESE CRUST'){
            echo $lang_cheese;
        }else echo $lang_sau;
        echo "</div>";

        // price
        echo "<div class='right'>" . $_SESSION['order_2']['sum_price'] . ".00";

    }
?>