<?php
/**
 * Created by PhpStorm.
 * User: TeRmiT
 * Date: 05.12.2016
 * Time: 23:01
 */

namespace App\Models;

use App\Model;

class User extends Model
{
    const TABLE = 'users';
    public $name;
    public $email;

    public function getName(){}
}