<?php
/**
 * Сделайте класс Worker, в котором будут следующие private поля - name (имя), age (возраст), salary (зарплата)
 * и следующие public методы setName, getName, setAge, getAge, setSalary, getSalary.
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
