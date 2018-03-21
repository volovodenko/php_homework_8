<?php

/**
 * Сделайте класс Student, который наследует от класса User и вносит дополнительные
 * private поля стипендия, курс, а также геттеры и сеттеры для них.
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

class Student extends User
{
    private $grant;
    private $class;

    public function setGrant($grant)
    {
        $this->grant = $grant;
    }

    public function getGrant()
    {
        return $this->grant;
    }

    public function setClass($class)
    {
        $this->class = $class;
    }

    public function getClass()
    {
        return $this->class;
    }
}