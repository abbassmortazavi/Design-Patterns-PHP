<?php

/**
 * Project:  design-pattern
 * FileName: Car.php
 * User:     abbass
 * Time:     20:24
 * Date:     2022/06/09
 */

namespace App\Decorator;

interface Car
{
    public function price();
    public function description();
}