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


?>