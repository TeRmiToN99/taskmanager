<?php

namespace App\Models;


use App\Model;

class News
    extends Model
{
    const TABLE = 'news';

    public $title;
    public $lead;
    public $author_id;

}