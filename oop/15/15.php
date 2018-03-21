<?php

/**
 * Создайте класс Form - оболочку для создания форм.
 * Он должен иметь методы input, submit, password, textarea, open, close.
 * Каждый метод принимает массив атрибутов.
 * Для решения задачи сделайте private метод, который параметром будет принимать массив,
 * например, ['type'=>'text', 'value'=>'!!!'] и делать из него строку с атрибутами,
 * в нашем случае type="text" value="!!!".
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

$form = new Form;

echo $form->open(['action' => '', 'method' => 'POST']);
echo $form->input(['type' => 'text', 'placeholder' => 'Ваше имя', 'name' => 'name']);
echo $form->password(['placeholder' => 'Ваш пароль', 'name' => 'pass']);
echo "<br>";
echo $form->textarea(['placeholder' => '123', 'name' => 'text' , 'value' => '!!!']);
echo "<br>";
echo $form->submit(['value' => 'Отправить']);
echo $form->close();