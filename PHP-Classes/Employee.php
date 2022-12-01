<?php
class Employee
{
    public $name;
    public $salary;
    public $ot;

    function  __construct($name, $salary, $ot)
    {
        $this->name = $name;
        $this->salary = $salary;
        $this->ot = $ot;
    }

    function Print_Employee()
    {
        echo "Employee name : " . $this->name . "<br/>";
        echo "Salary  : " . $this->salary . "<br/>";
        echo "OT Time : " . $this->ot . "<br/>";
    }
}


$ice = new Employee("Ice", "10000", "10111");
$ice->Print_Employee();
