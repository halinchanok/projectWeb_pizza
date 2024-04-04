<?php
    $lang = isset($_GET['lang']) ? $_GET['lang'] : 'en';

    // --- index ----------------------------------------------------------
    $tap = array('th' => 'พิซซ่าหน้าชีส', 'en' => 'TAP TO START');
    $lang_tap = $tap[$lang];

    // --- page1 ----------------------------------------------------------
    // CHEESE PIZZA
    $cheese = array('th' => 'พิซซ่าหน้าชีส', 'en' => 'CHEESE PIZZA');
    $lang_cheese = $cheese[$lang];

    // DOUBLE PEPPERONI
    $pepperoni = array('th' => 'ดับเบิ้ลเปปเปอโรนี', 'en' => 'DOUBLE PEPPERONI');
    $lang_pepperoni = $pepperoni[$lang];

    // HAM&CRAB STICKS
    $ham = array('th' => 'แฮมและปูอัด', 'en' => 'HAM&CRAB STICKS');
    $lang_ham = $ham[$lang];

    // MEAT DELUXE
    $deluxe = array('th' => 'มีทเดอลุกซ์', 'en' => 'MEAT DELUXE');
    $lang_deluxe = $deluxe[$lang];

    // TOM YUM KUNG
    $tomyum = array('th' => 'ต้มยำกุ้ง', 'en' => 'TOM YUM KUNG');
    $lang_tomyum = $tomyum[$lang];

    // SEAFOOD DELUXE
    $seafood = array('th' => 'ซีฟู้ดเดอลุกซ์', 'en' => 'SEAFOOD DELUXE');
    $lang_seafood = $seafood[$lang];

    // size
    $size = array('th' => 'ขนาด', 'en' => 'SIZE');
    $lang_size = $size[$lang];

    // crust
    $crust = array('th' => 'ขอบ', 'en' => 'CRUST');
    $lang_crust = $crust[$lang];

    // ORDER SUMMARY
    $order = array('th' => 'สรุปคำสั่งซื้อ', 'en' => 'ORDER SUMMARY');
    $lang_order = $order[$lang];

    // PAN CRUST
    $pan = array('th' => 'ขอบหนานุ่ม', 'en' => 'PAN CRUST');
    $lang_pan = $pan[$lang];

    // CRISPY THIN
    $crispy = array('th' => 'ขอบบางกรอบ', 'en' => 'CRISPY THIN');
    $lang_crispy = $crispy[$lang];

    // CHEESE CRUST
    $cheese = array('th' => 'ขอบชีส', 'en' => 'CHEESE CRUST');
    $lang_cheese = $cheese[$lang];

    // SAUSAGE&CHEESE CRUST
    $sau = array('th' => 'ขอบไส้กรอกชีส', 'en' => 'SAUSAGE&CHEESE CRUST');
    $lang_sau = $sau[$lang];

    // CHEESE2
    $cheese2 = array('th' => 'ชีส', 'en' => 'CHEESE');
    $lang_cheese2 = $cheese2[$lang];

    // HAM
    $ham = array('th' => 'แฮม', 'en' => 'HAM');
    $lang_ham = $ham[$lang];

    // PEPPERONI
    $pepperoni = array('th' => 'เปปเปอโรนี', 'en' => 'PEPPERONI');
    $lang_pepperoni = $pepperoni[$lang];

    // Items in the cart
    $item = array('th' => 'สินค้าในตะกร้า', 'en' => 'Items in the cart');
    $lang_item = $item[$lang];

    // Sorry, there are currently no products in your cart.
    $sorry = array('th' => 'ขออภัย ขณะนี้ไม่มีสินค้าในตะกร้า', 'en' => 'Sorry, there are currently no products in your cart.');
    $lang_sorry = $sorry[$lang];

    // pieces
    $pieces = array('th' => 'ชิ้น', 'en' => 'pieces');
    $lang_pieces = $pieces[$lang];

    // Total price
    $total = array('th' => 'ชิ้น', 'en' => 'Total price');
    $lang_total = $total[$lang];

    // PAYMENT
    $pay = array('th' => 'จ่ายเงิน', 'en' => 'PAYMENT');
    $lang_pay = $pay[$lang];
?>