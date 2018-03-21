<?php
/**
 * Выведите на экран сумму зарплат Ивана и Васи. Выведите на экран сумму возрастов Ивана и Васи.
 */
class Worker
{
    public $name;
    public $age;
    public $salary;
}

$obj1 = new Worker;
$obj1->name = "Иван";
$obj1->age = 25;
$obj1->salary = 1000;

$obj2 = new Worker;
$obj2->name = "Вася";
$obj2->age = 26;
$obj2->salary = 2000;

echo "Сумма зарплат: " . ($obj1->salary +  $obj2->salary) . "<br>";
echo "Сумма возрастов: " . ($obj1->age +  $obj2->age);