<?php
/**
 * Реализуйте класс Flash, который будет использовать внутри себя класс Session из предыдущей задачи
 * (именно использовать, а не наследовать).
 * Этот класс будет использоваться для сохранения сообщений в сессию и вывода их из сессии.
 * Зачем это нужно: такой класс часто используется для форм.
 * Например на одной странице пользователь отправляет форму, мы сохраняем в сессию сообщение об успешной отправке,
 * редиректим пользователя на другую страницу и там показываем сообщение из сессии.
 * Класс должен иметь да метода - setMessage, который сохраняет сообщение в сессию и getMessage,
 * который получает сообщение из сессии.
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

    public function is($name)
    {
        return isset($_SESSION["$name"]) ? true : false;
    }
}

class Flash
{
    private $ses;

    public function __construct()
    {
        $this->ses = new Session;
    }

    public function setMessage($name, $value)
    {
        $this->ses->set($name, $value);
    }

    public function getMessage($name)
    {
        return $this->ses->get($name);
    }
}