<?php
/**
 * Project:  design-pattern
 * FileName: ZarinPal.php
 * User:     abbass
 * Time:     21:17
 * Date:     2022/06/06
 */

namespace Sterategy;
interface GateWay
{
    public function setInfo($info);

    public function pay();
}

class ZarinPal implements GateWay
{
    protected $info;

    public function setInfo($info)
    {
        $this->info = $info;
    }

    public function pay()
    {
        return $this->info;
    }
}

class Mellat implements GateWay
{
    protected $info;

    public function setInfo($info)
    {
        $this->info = $info;
    }

    public function pay()
    {
        return $this->info;
    }
}

class Payment
{
    protected $gateWay;

    public function setGateWay(GateWay $gateWay)
    {
        $this->gateWay = $gateWay;
    }

    public function addInfo($info)
    {
        $this->gateWay->setInfo($info);
    }

    public function pay()
    {
        return $this->gateWay->pay();
    }
}

$payment = new Payment();

$payment->setGateWay(new Mellat());
$payment->addInfo(['name' => 'Abbass', 'price' => 90000]);
var_dump($payment->pay());
