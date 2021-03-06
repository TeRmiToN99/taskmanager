<?php


namespace App\Models;

use App\Model;

class User extends Model
    implements HasEmail
{
    const TABLE = 'users';

    public $name;
    public $email;

    /**
     * Метод, возвращающий адрес e-mail
     * @deprecated
     * @return string Адрес электронной почты
     */
    public function getEmail()
    {
        return $this->email;
    }
    public function getName(){}
}