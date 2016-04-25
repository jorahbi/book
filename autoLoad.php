<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2016/2/20
 * Time: 13:23
 */
header('Content-Type:text/html;charset=utf-8');
function __autoload($class){
    $path = $class . '.php';
    if (is_file($path)){
        require $path;
    }
}

