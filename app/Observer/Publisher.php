<?php
/**
 * Project:  design-pattern
 * FileName: Publisher.php
 * User:     abbass
 * Time:     21:02
 * Date:     2022/06/07
 */


namespace App\Observer;

class Publisher
{
    public $observers = [];

    protected $event;

    public function setEvent($event)
    {
        $this->event = $event;
    }

    public function getEvent()
    {
        return $this->event;
    }
}