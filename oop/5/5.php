<?php
/**
 * Создайте 2 объекта этого класса: 'Иван', возраст 25, зарплата 1000 и 'Вася', возраст 26, зарплата 2000.
 */
class Worker
{
    private $name;
    private $age;
    private $salary;

    public function setName($name) {
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }

    public function setAge($age) {
        $this->age = $age;
    }

    public function getAge() {
        return $this->age;
    }

    public function setSalary($salary) {
        $this->salary = $salary;
    }

    public function getSalary() {
        return $this->salary;
    }
}

$obj1 = new Worker;
$obj1->setName("Иван");
$obj1->setAge(25);
$obj1->setSalary(1000);

$obj2 = new Worker;
$obj2->setName("Вася");
$obj2->setAge(26);
$obj2->setSalary(2000);