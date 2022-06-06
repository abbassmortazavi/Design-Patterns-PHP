<?php
//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

//include_once '../Sterategy/Strategy.php';



require_once '../Sterategy/ShoppingCart.php';
$cart = new ShoppingCart(10000);
$cart->payAmount();

