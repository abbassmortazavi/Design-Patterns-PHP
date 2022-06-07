<?php
/**
 * Project:  design-pattern
 * FileName: Service.php
 * User:     abbass
 * Time:     20:52
 * Date:     2022/06/07
 */
namespace App\Observer;

class Service implements IObserver
{
    protected $name;
    protected $prierity;

    public function __construct($name , $prierity = 0)
    {
        $this->name = $name;
        $this->prierity = $prierity;
    }

    public function update(IObserverbale $observerbale)
    {
        print_r("{$this->name} : {$observerbale->getEvent()} <br>");
    }
}