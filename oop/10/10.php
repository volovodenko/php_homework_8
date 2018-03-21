<?php
/**
 * Сделайте класс User, в котором будут следующие protected поля - name (имя), age (возраст),
 * public методы setName, getName, setAge, getAge.
 */
class User
{
    protected $name;
    protected $age;

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
}