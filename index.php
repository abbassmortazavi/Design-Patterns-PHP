<?php
//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

//include_once '../Sterategy/Strategy.php';

use App\Observer\Service;

require __DIR__ . '/vendor/autoload.php';

$mail = new Service('MailObserver' , 30);
$clock = new Service('MailObserver' , 30);
$desktop = new Service('MailObserver' , 30);


