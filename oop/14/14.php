<?php

/**
 * Сделайте класс Driver (Водитель), который будет наследоваться от класса Worker из предыдущей задачи.
 * Этот метод должен вносить следующие private поля: водительский стаж, категория вождения (A, B, C).
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

class Driver extends Worker
{
    private $driverExp;
    private $drivingCategory;

    public function setDriverExp($driverExp)
    {
        $this->driverExp = $driverExp;
    }

    public function getDriverExp()
    {
        return $this->driverExp;
    }

    public function setDrivingCategory($drivingCategory)
    {
        $this->drivingCategory = $drivingCategory;
    }

    public function getDrivingCategory()
    {
        return $this->drivingCategory;
    }
}