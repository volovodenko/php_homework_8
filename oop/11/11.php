<?php

/**
 * Сделайте класс Worker, который наследует от класса User и вносит дополнительное
 * private поле salary (зарплата), а также методы public getSalary и setSalary.
 */
class User
{
    protected $name;
    protected $age;

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setAge($age)
    {
        $this->age = $age;
    }

    public function getAge()
    {
        return $this->age;
    }
}

class Worker extends User
{
    private $salary;

    public function setSalary($salary)
    {
        $this->salary = $salary;
    }

    public function getSalary()
    {
        return $this->salary;
    }
}