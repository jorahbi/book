<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2016/2/20
 * Time: 13:08
 */
//雇员类
abstract class Employee
{
    protected $name;
    private static $type = Array('Minion');
    public function __construct($name)
    {
        $this->name = $name;
    }

    public static function recruit($name)
    {
        $num = rand(0, count(self::$type) - 1);
        return new self::$type[$num]($name);
    }
    abstract function fire();
}