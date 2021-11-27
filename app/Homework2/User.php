<?php

//● id — id пользователя;
//● name — имя пользователя;
//● age — возраст пользователя;
//● email — email пользователя.
require_once 'User.php';
require_once 'UserFormValidator.php';
class User
{
    private int $id;
    private string $name;
    private int $age;
    private string $email;

    public function __construct($id, $name, $age, $email)
    {
        $this->id = $id;
        $this->name = $name;
        $this->age = $age;
        $this->email = $email;
    }

    //метод должен формировать исключение,
    //если переданный $id не найден в базе данных (придумайте любое
    //условие на значение параметра $id для имитации этой ошибки);
    public function load(int $id) {
        if($id%2==0) {
            throw new Error('Пользователя с данным айди нет в БД');
        }
    }

    //метод имитирует сохранение
    //пользователя в базе данных и возвращает true, если сохранение прошло
    //успешно, или false, если произошла ошибка. Для имитации работы метод
    //должен возвращать случайное значение true или false.
    //бд лагает, шанс 50 процентов на сейв)
    public function save(array $data): bool {
        $randomNumber = random_int(0, 1);
        if($randomNumber==0){
            return false;
        }
        else {
            return true;
        }
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return int
     */
    public function getAge(): int
    {
        return $this->age;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

}