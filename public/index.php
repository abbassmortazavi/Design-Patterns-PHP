<?php
//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


use App\Observer\Publisher;
use App\Observer\Service;

require __DIR__ . '/../vendor/autoload.php';
//require_once __DIR__ . '/../vendor/autoload.php';

$notify = new Publisher();

$mail = new Service('MailObserver' , 30);
$clock = new Service('ClockObserver' , 50);
$desktop = new Service('DesktopObserver' , 10);

$notify->register($mail);
$notify->register($clock);
$notify->register($desktop);

$notify->setEvent('do somthing...');

$notify->unregister($mail);

$notify->setEvent('another');



