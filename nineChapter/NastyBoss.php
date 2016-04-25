<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2016/2/20
 * Time: 13:18
 */
require '../autoLoad.php';
class NastyBoss {
    private $_employee = Array();

    public function addEmployee(Employee $obj)
    {
        $this->_employee[] = $obj;
    }

    public function projectFails()
    {
        if(count($this->_employee) > 0){
            $emp = array_pop($this->_employee);
        }
        $emp->fire();
    }
}

$nastyBoss = new NastyBoss();
$nastyBoss->addEmployee(Employee::recruit('luck'));
$nastyBoss->projectFails();