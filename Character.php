<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2016/2/3
 * Time: 23:08
 */

class Character
{
    public $test = '11111111111';
}

$class = new ReflectionClass('Character');

print_r($class);
echo '<pre>';
Reflection::export($class);