<?php
/**
 * Project:  design-pattern
 * FileName: Service.php
 * User:     abbass
 * Time:     20:52
 * Date:     2022/06/07
 */
namespace App\Observer;

class Service
{
    protected $name;
    protected $prierity;

    public function __construct($name , $prierity = 0)
    {
        $this->name = $name;
        $this->prierity = $prierity;
    }
}