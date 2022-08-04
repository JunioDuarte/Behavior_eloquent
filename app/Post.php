<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = "posts";
    protected $primarykey = "id";

    public $timestamps = true;
    //public const CREATED_AT = "creation_date";
    //public const UPDATED_AT = "last_update";
}