<?php

//Правила валидации
//● Имя должно быть не пустым.
//● Возраст должен быть не менее 18 лет.
//● Email должен быть заполнен и соответствовать формату email.
require_once 'User.php';
require_once 'UserFormValidator.php';
class UserFormValidator
{

    //метод осуществляет валидацию
    //массива с данными. Если валидация не прошла, то метод должен
    //выбросить исключения с текстом ошибки. Для каждого правила
    //валидации текст ошибки должен быть свой.
    public function validate(array $data)
    {
        $errorString = "";
            foreach ($data as $el) {
                if (strlen($el->getName()) == 0) {
                    $errorString .= "Имя не должно быть пустым<br/>";
                };
                if ($el->getAge() < 18) {
                    $errorString .= "Возраст должен быть не менее 18 лет<br/>";

                };
                if (!filter_var($el->getEmail(), FILTER_VALIDATE_EMAIL)) {
                    $errorString .= "Email должен быть заполнен и соответствовать формату email<br/>";
                }
            }
            if($errorString!=""){
                throw new Error($errorString);
            }
    }
}