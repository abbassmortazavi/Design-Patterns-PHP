<?php
//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

//include_once '../Sterategy/Strategy.php';



require_once '../Sterategy/ShoppingCart.php';
$cart = new ShoppingCart(10000);
$cart->payAmount();

