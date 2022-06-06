<?php
/**
 * Project:  design-pattern
 * FileName: PayBySokanPal.php
 * User:     abbass
 * Time:     22:22
 * Date:     2022/06/06
 */


require_once 'PayStrategy.php';

class PayBySokanPal implements PayStrategy
{
    public function pay($amount = 0)
    {
        echo "Paying " . $amount . " using SokanPal";
    }
}