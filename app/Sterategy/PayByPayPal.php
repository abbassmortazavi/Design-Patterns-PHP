<?php
/**
 * Project:  design-pattern
 * FileName: PayByPayPal.php
 * User:     abbass
 * Time:     22:22
 * Date:     2022/06/06
 */


namespace Sterategy;

require_once 'PayStrategy.php';

class PayByPayPal implements PayStrategy
{
    public function pay($amount = 0)
    {
        echo "Paying " . $amount . " using PayPal";
    }
}