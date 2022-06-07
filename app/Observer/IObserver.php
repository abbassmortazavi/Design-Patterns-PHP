<?php

/**
 * Project:  design-pattern
 * FileName: IObserver.php
 * User:     abbass
 * Time:     21:13
 * Date:     2022/06/07
 */

namespace App\Observer;

interface IObserver
{
    public function update(IObserverbale $observerbale);
}