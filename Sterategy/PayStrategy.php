<?php
/**
 * Project:  design-pattern
 * FileName: PayStrategy.php
 * User:     abbass
 * Time:     22:22
 * Date:     2022/06/06
 */


interface PayStrategy {
    public function pay($amount);
}
