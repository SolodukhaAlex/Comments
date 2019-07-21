<?php

include "connect.php";
class Comment
{
    private $data = array();

    public function __construct($row)
    {
        $this->data = $row;
    }

    public function showComment()
    {
// Устанавливаем псевдоним, чтобы не писать каждый раз $this->data:
        $d = &$this->data;

// Преобразуем время в формат UNIX:
        //$d['dt'] = strtotime($d['dt']);

        return '<div class="comment"><div class="name">' . $d['name'] . '</div><div class="email">' . $d['email'] . '</div><div class="date">' . $d['date'] . '</div><p>' . $d['messageBody'] . '</p></div>';
    }

    public static function validate(&$arr)
    {
        $errors = array();
        $data = $arr;


        if (!($data['name'] = filter_input(INPUT_POST, 'name', FILTER_CALLBACK, array('options' => 'Comment::validate_name')))) {
            $errors['name'] = 'Пожалуйста, введите имя.';
        }
        if (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
            {
                $errors['email'] = 'Пожалуйста, введите правильный Email.';
            }
        }
        if ($data['messageBody'] == null || $data['messageBody'] == "") {
            $errors['messageBody'] = 'Пожалуйста, введите текст комментария.';
        }

        if (!empty($errors)) {

            // Если есть ошибки, копируем массив $errors в $arr:

            $arr = $errors;
            return false;
        }



        //email дожен быть в нижнем регистре:

        $arr['email'] = strtolower(trim($arr['email']));

        return true;
    }

    private static function validate_name($name){
        if(mb_strlen($name, 'utf8')<1){
            return false;
        }
        return $name;
    }
}