<?php

/**
 * Project:  design-pattern
 * FileName: IObserverbale.php
 * User:     abbass
 * Time:     21:08
 * Date:     2022/06/07
 */

namespace App\Observer;

interface IObserverbale
{
    public function register(IObserver $observer);
    public function unregister(IObserver $observer);
    public function notify();
}