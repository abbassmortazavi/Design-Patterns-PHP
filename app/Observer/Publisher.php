<?php
/**
 * Project:  design-pattern
 * FileName: Publisher.php
 * User:     abbass
 * Time:     21:02
 * Date:     2022/06/07
 */


namespace App\Observer;

class Publisher implements IObserverbale
{
    public $observers = [];

    protected $event;

    public function setEvent($event)
    {
        $this->event = $event;
        $this->notify();
    }

    public function getEvent()
    {
        return $this->event;
    }

    public function register(IObserver $observer)
    {
        $observerKey = spl_object_hash($observer);
        $this->observers[$observerKey] = $observer;
    }

    public function unregister(IObserver $observer)
    {
        $observerKey = spl_object_hash($observer);
        unset($this->observers[$observerKey]);
    }

    public function notify()
    {
        foreach ($this->observers as $observer)
        {
            $observer->update($this);
        }
    }

    /**
     * @return array
     */
    public function getObservers(): array
    {
        return $this->observers;
    }
}