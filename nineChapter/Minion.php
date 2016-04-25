z<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2016/2/20
 * Time: 13:15
 */

class Minion extends Employee{
    public function fire()
    {
        print_r($this->name . '雇员辞职');
    }
}