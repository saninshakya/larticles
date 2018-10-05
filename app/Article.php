<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    // Table Name
    protected $table = 'articles';
    //primary Key
    public $primaryKey = 'id';

}
