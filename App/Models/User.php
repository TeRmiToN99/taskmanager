<?php
/**
 * Created by PhpStorm.
 * User: TeRmiT
 * Date: 05.12.2016
 * Time: 23:01
 */

namespace App\Models;


use App\Db;

class User
{
    public $name;
    public $email;

    public static function findAll(){
        $db = new Db();
        return $db->query(
            'SELECT * FROM users',
            'App\Models\User' //User::class
        );
    }
}