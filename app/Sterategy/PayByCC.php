<?php
/**
 * Project:  design-pattern
 * FileName: PayBycc.php
 * User:     abbass
 * Time:     22:21
 * Date:     2022/06/06
 */


namespace Sterategy;

require_once 'PayStrategy.php';

class PayByCC implements PayStrategy
{
    public function pay($amount = 0)
    {
        echo "Paying " . $amount . " using Credit Card";
    }
}