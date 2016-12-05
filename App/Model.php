<?php

namespace App;


abstract class Model
{
    const TABLE = '';
    //public static $table = 'users';
    public static function findAll(){
        $db = new Db();
        return $db->query(
            'SELECT * FROM ' . static::TABLE,  //self::$table,
            static::class//'App\Models\User' //User::class
        );
    }
    abstract public function getName();
}