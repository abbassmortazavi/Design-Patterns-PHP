<?php
/**
 * Project:  design-pattern
 * FileName: ShoppingCart.php
 * User:     abbass
 * Time:     22:22
 * Date:     2022/06/06
 */


namespace Sterategy;

require_once 'PayByPayPal.php';
require_once 'PayByCC.php';
require_once 'PayBySokanPal.php';

class ShoppingCart
{
    public $amount = 0;

    public function __construct($amount = 0)
    {
        $this->amount = $amount;
    }

    public function getAmount()
    {
        return $this->amount;
    }

    public function setAmount($amount = 0)
    {
        $this->amount = $amount;
    }


    public function payAmount()
    {
        $message = match ($this->amount) {
            $this->amount > 1000000 => new PayBySokanPal(),
            $this->amount >= 500000 => new PayByCC(),
            default => new PayByPayPal(),
        };
        return $message->pay($this->amount);
    }
}