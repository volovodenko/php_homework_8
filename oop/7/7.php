<?php
/**
 * Дополните класс Worker из предыдущей задачи private методом checkAge,
 * который будет проверять возраст на корректность (от 1 до 100 лет).
 * Этот метод должен использовать метод setAge перед установкой нового возраста
 * (если возраст не корректный - он не должен меняться).
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
        $this->checkAge($age) ? $this->age = $age : null;
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

    private function checkAge($age) {
        return $age>=1 && $age<=100;
    }
}
