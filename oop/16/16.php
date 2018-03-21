<?php

/**
 * Создайте класс SmartForm, который будет наследовать от Form из предыдущей
 * задачи и сохранять значения инпутов и textarea после отправки.
 */
class Form
{
    private function arrToString($array)
    {
        $string = "";
        foreach ($array as $key => $value) {
            $string .= $key . "=\"" . $value . "\" ";
        }

        return trim($string);
    }

    public function open($data)
    {
        return "<form " . $this->arrToString($data) . ">";
    }

    public function close()
    {
        return "</form>";
    }

    public function input($data)
    {
        return "<input " . $this->arrToString($data) . ">";
    }

    public function password($data)
    {
        return "<input type='password' " . $this->arrToString($data) . ">";
    }

    public function submit($data)
    {
        return "<input type='submit' " . $this->arrToString($data) . ">";
    }

    public function textarea($data)
    {
        $value = $data["value"];
        unset($data["value"]);
        return "<textarea " . $this->arrToString($data) . ">". $value ."</textarea>";
    }
}

class smartForm extends Form
{

    private function getValue($data) {
        $name = isset($data["name"]) ? $data["name"] : null;
        return isset($name)
            ? isset($_POST["$name"]) ? $_POST["$name"] : ""
            : "" ;
    }

    public function input($data)
    {
        $data["value"] = $this->getValue($data);
        return parent::input($data);
    }

    public function password($data)
    {
        $data["value"] = $this->getValue($data);
        return parent::password($data);
    }

    public function textarea($data)
    {
        $data["value"] = $this->getValue($data);
        return parent::textarea($data);
    }

}

$form = new smartForm;

echo $form->open(['action' => '', 'method' => 'POST']);
echo $form->input(['type' => 'text', 'placeholder' => 'Ваше имя', 'name' => 'name']);
echo $form->password(['placeholder' => 'Ваш пароль', 'name' => 'pass']);
echo "<br>";
echo $form->textarea(['placeholder' => '123', 'name' => 'text']);
echo "<br>";
echo $form->submit(['value' => 'Отправить']);
echo $form->close();