<?php
//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

use App\Decorator\Vehicle;
use App\Observer\Publisher;
use App\Observer\Service;

require_once __DIR__ . '/../vendor/autoload.php';


$pride = new Vehicle();

echo $pride->price();






//un comment to run Observer Pattern
/*$notify = new Publisher();
$mail = new Service('MailObserver' , 30);
$clock = new Service('ClockObserver' , 50);
$desktop = new Service('DesktopObserver' , 10);

$notify->register($mail);
$notify->register($clock);
$notify->register($desktop);

$notify->setEvent('do somthing...');

$notify->unregister($mail);

$notify->setEvent('another');*/






