<?php
/**
 * Создайте объект этого класса 'Дима', возраст 25, зарплата 1000.
 * Выведите на экран произведение его возраста и зарплаты.
 */
class Worker
{
    private $name;
    private $age;
    private $salary;

    public function __construct($name, $age, $salary)
    {
        $this->name = $name;
        $this->age = $age;
        $this->salary = $salary;
    }

    public function getName() {
        return $this->name;
    }

    public function getAge() {
        return $this->age;
    }

    public function getSalary() {
        return $this->salary;
    }
}

$obj1 = new Worker("Дима", 25, 1000);
echo $obj1->getAge()*$obj1->getSalary();