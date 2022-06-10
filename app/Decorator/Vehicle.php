<?php
/**
 * Project:  design-pattern
 * FileName: Pride.php
 * User:     abbass
 * Time:     20:26
 * Date:     2022/06/09
 */


namespace App\Decorator;

class Vehicle implements Car
{

    public function price(): int
    {
        return 4000;
    }

    public function description(): string
    {
        return "pride";
    }
}