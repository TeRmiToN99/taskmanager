<?php
/**
 * Created by PhpStorm.
 * User: TeRmiT
 * Date: 06.12.2016
 * Time: 0:12
 */

namespace App;


class Model
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
}