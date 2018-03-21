<?php

/**
 * Создайте класс Cookie - оболочку над работой с куками.
 * Класс должен иметь следующие методы: установка куки set(имя куки, ее значение),
 * получение куки get(имя куки), удаление куки del(имя куки).
 */
class Cookie
{
    public function set($name, $value)
    {
        setcookie($name, $value);
    }

    public function get($name)
    {
        return isset($_COOKIE["$name"]) ? $_COOKIE["$name"] : null;
    }

    public function del($name)
    {
        setcookie($name, "");
    }
}