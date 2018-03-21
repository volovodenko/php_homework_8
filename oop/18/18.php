<?php

/**
 * Создайте класс Session - оболочку над сессиями.
 * Он должен иметь следующие методы: создать переменную сессии, получить переменную,
 * удалить переменную сессии, проверить наличие переменной сессии.
 * Сессия должна стартовать (session_start) в методе __construct.
 */
class Session
{
    public function __construct()
    {
        session_start();
    }

    public function set($name, $value)
    {
        $_SESSION["$name"] = $value;
    }

    public function get($name)
    {
        return isset($_SESSION["$name"]) ? $_SESSION["$name"] : null;
    }

    public function del($name)
    {
        unset($_SESSION["$name"]);
    }

    public function is($name) {
        return isset($_SESSION["$name"]) ? true : false;
    }
}